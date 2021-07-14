<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModel;
use App\Repositories\EmployeesRepository;
use App\Repositories\FetchUrlRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TodoController extends Controller
{
    const TOTAL_WEEKLY_HOUR = 45;

    /**
     * Let's pull all the data from the dynamic URLs on the database.
     * Veritabanı üzerindeki dinamik URL lerden tüm işleri çekelim. 30 dakika verileri önbellekte saklar.
     * @return array
     */
    public static function fetchData()
    {
        if(!Cache::has('fetchData')) {
            $fetchUrlRepository = new FetchUrlRepository();

            foreach ($fetchUrlRepository->fetchUrls() as $values)
            {
                $getData[] = Http::get($values)->json();
            }
            Cache::put('fetchData', $getData, 60 * 30); // Keeps data in cache for 30 minutes.
        }

        return Cache::get('fetchData');
    }

    /**
     * Let's calculate the total workload.
     * Toplam iş yükünü hesaplayalım.
     * @return mixed
     */
    public function calculateTotalWorkload()
    {
        foreach (self::fetchData() as $k => $v)
        {
            foreach ($v as $key => $value)
            {
                $totalWorkload[] = $value['zorluk'] * $value['sure'];
            }
        }

        return array_sum($totalWorkload);
    }

    /**
     * Let's calculate all the working metrics.
     * Tüm çalışma metriklerini hesaplayalım.
     *
     * @return array
     */
    public function calculateWorkMetrics()
    {
        $employeesRepository = new EmployeesRepository();

        $totalFinished = [];
        foreach ($employeesRepository->fetchEmployees() as $k => $v)
        {
            array_push($totalFinished, $v['unit'] * self::TOTAL_WEEKLY_HOUR);
        }

        $highPerformanceEmployee = EmployeesModel::max('unit');
        $totalFinishWithEmployee = array_sum($totalFinished);
        $totalFinishWeek         = floor($this->calculateTotalWorkload() / $totalFinishWithEmployee);
        $leftOverTime            = $this->calculateTotalWorkload() - ($totalFinishWithEmployee * $totalFinishWeek);

        return [
            'highPerformanceEmployee' => $highPerformanceEmployee,
            'totalFinishWithEmployee' => $totalFinishWithEmployee,
            'totalFinishWeek'         => $totalFinishWeek,
            'dailyWorkUnit'           => $totalFinishWithEmployee / 5,
            'leftOverTime'            => $leftOverTime,
            'totalWorkload'           => $this->calculateTotalWorkload(),
            'totalWeeklyHour'         => self::TOTAL_WEEKLY_HOUR
        ];
    }

    /**
     * View results.
     * Sonuçları görüntüle.
     *
     * @param EmployeesRepository $employeesRepository
     *
     * @return View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function renderView(EmployeesRepository $employeesRepository)
    {
        return view('todo', [
            'allEmployees' => $employeesRepository->fetchEmployees(),
            'metrics'      => $this->calculateWorkMetrics(),
        ]);
    }
}
