<?php

namespace App\Repositories;

use App\Models\FetchUrlsModel;

class FetchUrlRepository {

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fetchUrls(){
        return FetchUrlsModel::all()->pluck('url');
    }
}


