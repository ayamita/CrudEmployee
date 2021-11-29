<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ConstanciasController;
Route::get('/', function () {
    return view('index');
});

Route::resource('/employee',EmployeController::class);

Route::post('/recomendacion/{id}', [ConstanciasController::class,"PDF"]);