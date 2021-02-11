<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployController;

Route::view('/',"homepage");
Route::get('add',[EmployController::class,'EmployList']);
Route::post('add/done',[EmployController::class,'addEmployes']);
Route::get('delete/{id}',[EmployController::class,'empdelete']);
Route::get('edit/{id}',[EmployController::class,'empedit']);
Route::post('edit',[EmployController::class,'update']);
