<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;

// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/{id}', [StudentController::class, 'show']);

// ----------------method 1----------
// Route::resource('/students', StudentController::class);
// Route::resource('/subjects', SubjectController::class);
// Route::resource('/grades', GradeController::class);
//---------method 2-----------
Route::resources(([
    'students'=>StudentController::class,
    'grades'=>GradeController::class,
    'subjects'=>SubjectController::class,
]));

// Route::get('/students/{id}', function ($id) {

//     $student=Student::find($id);




//     return view('grade.show',compact('student'));

// });



// Route::get('/grades/{id}', function ($id) {

//     $grade=Grade::find($id);
//     $students=Grade::find($id)->students;



//     return view('grade.index',compact('grade','students'));

// });

// Route::get('/subjects/{id}', function ($id) {

//     $subjects=Subject::find($id);
//     // $students=Grade::find($id)->students;



//     return view('subject.index',compact('subjects'));

// });

