<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add-new-employee', 'employee.add-new-employee');

Route::view('test', 'employee.test');
