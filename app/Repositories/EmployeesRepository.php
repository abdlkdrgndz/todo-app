<?php

namespace App\Repositories;

use App\Models\EmployeesModel;

class EmployeesRepository {

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fetchEmployees(){
        return EmployeesModel::all();
    }
}


