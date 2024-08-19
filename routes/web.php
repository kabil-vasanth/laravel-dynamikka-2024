<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/students', function () {

    $student=Student::all();



    return view('student.index',compact('student'));

});

Route::get('/students/{id}', function ($id) {

    $student=Student::find($id);



    return view('student.show',compact('student'));

});
