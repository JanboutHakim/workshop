<?php

use App\Http\Controllers\DesignController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
// Designs Routes
Route::get('Design/all', [DesignController::class,'index']);
Route::get('Design/create', [DesignController::class,'getAddDesigns']);
Route::post('Design/create', [DesignController::class,'postAddDesigns']);
Route::get('Design/{id}', [DesignController::class,'show']);
Route::delete('Design/{id}', [DesignController::class,'delete']);

//Employees Routes
Route::get('employee/add', [EmployeeController::class,'addEmp']);
Route::post('employee/add',[EmployeeController::class,'add']);
Route::delete('Design/{id}', [DesignController::class,'delete']);

