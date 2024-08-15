<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;


Route::get('/employee', function () {

    $employees=Employee::all();

    return view('employee.index',compact('employees'));
});

Route::get('/employee/{id}', function ($id) {

    $employees=Employee::find($id);

    return view('employee.employee',compact('employees'));
});

