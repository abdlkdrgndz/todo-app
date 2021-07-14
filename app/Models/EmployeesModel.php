<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeesModel extends Model
{
    use HasFactory;
    /**
     * No real deletion is done with soft delete.
     */
    use SoftDeletes;

    protected $table        = 'employees';
    protected $primaryKey   = 'id_employee';
    protected $fillable     = ['name', 'unit'];

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
    protected $casts = [
        'id_employe' => 'int',
        'name'       => 'string',
        'unit'       => 'int',
    ];
}
