<?php

use Profnadir\Employeespackage\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->resource('employees',EmployeeController::class);
