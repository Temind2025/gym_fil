<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonnelEmployee extends Model
{
    //
    protected $table = 'personnel_employee';
    protected $fillable = [
        'first_name',
        'last_name',
        'emp_code',
        'is_active',
        'hire_date',

    ];
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'change_time';
}
