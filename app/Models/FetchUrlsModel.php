<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FetchUrlsModel extends Model
{
    use HasFactory;

    /**
     * No real deletion is done with soft delete.
     */
    use SoftDeletes;

    protected $table        = 'fetch_urls';
    protected $primaryKey   = 'id_fetch';
    protected $fillable     = ['url'];

    /**
     * @var string[]
     */
    protected $dates = [
            'created_at',
            'updated_at',
            'deleted_at',
    ];

    /**
     * @var string[]
     */
    protected $casts      = [
        'id_fetch'    => 'int',
        'url'           => 'string'
    ];
}
