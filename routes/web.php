<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Roll;


Route::get('/employee', function () {

    $employees=Employee::all();

    return view('employee.index',compact('employees'));
});

Route::get('/employee/{id}', function ($id) {

    $employees=Employee::find($id);

    return view('roll.show',compact('employees'));
});


// Route::get('roll/{id}', function ($id) {

//     $employees=Employee::find($id);

//     return view('roll.show',compact('employees'));
// });

Route::get('roll/{id}', function ($id) {

    $employees=Roll::find($id);
    $rolls=Roll::find($id)->employees;

    return view('roll.index',compact('employees','rolls'));
});
