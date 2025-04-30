<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home');})->name('home');

// routes for the courses
Route::get('/courses/index', [CourseController::class, 'index'])->name('courses');

// routes for the instructors
Route::get('/instructors/index', [InstructorController::class, 'index'])->name('instructors');

// routes for the departments
Route::get('/departments/index', [DepartmentController::class, 'index'])->name('departments');

//routes for the students
Route::get('/students/index', [StudentController::class, 'index'])->name('students');