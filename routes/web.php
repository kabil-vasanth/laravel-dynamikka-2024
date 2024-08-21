<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;

Route::get('/students', function () {

    $student=Student::all();



    return view('student.index',compact('student'));

});

Route::get('/students/{id}', function ($id) {

    $student=Student::find($id);




    return view('grade.show',compact('student'));

});



Route::get('/grades/{id}', function ($id) {

    $grade=Grade::find($id);
    $students=Grade::find($id)->students;



    return view('grade.index',compact('grade','students'));

});
