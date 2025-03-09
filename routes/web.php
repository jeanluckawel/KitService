<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddNewEmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('addnewemployee', AddNewEmployeeController::class)->names([
    'index' => 'addnewemployee.index',
    'create' => 'addnewemployee.create',
    'show'=> 'addnewemployee.show',
    'edit' => 'addnewemployee.edit',
    'update' => 'addnewemployee.update'
]);

// Route::view('add-new-employee', 'employee.add-new-employee');

Route::view('test', 'employee.test');
