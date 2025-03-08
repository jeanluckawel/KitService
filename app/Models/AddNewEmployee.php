<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddNewEmployee extends Model
{
    //
    protected $fillable = [
        'employeeId',
        'firstName',
        'lastName',
        'middleName',
        'IdNumber',
        'picture',
        'dateOfBirth',
        'gender',
        'department',
        'function',
        'dependant',
        'phone',
        'title',
        'relationship',
        'name',
        'adress',
        'phoneEmercency',
    ];

}
