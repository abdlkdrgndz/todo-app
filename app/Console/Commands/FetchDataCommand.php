<?php

namespace App\Console\Commands;

use App\Http\Controllers\TodoController;
use Illuminate\Console\Command;

class FetchDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:url';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch all datas.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return TodoController::fetchData();
    }
}
