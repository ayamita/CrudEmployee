<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

Route::get('/', function () {
    return view('index');
});

Route::resource('/employee',EmployeController::class);

