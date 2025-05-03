<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// routes for the courses
Route::get('/courses/index', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/show/{id}', [CourseController::class, 'show'])->name('course.show');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');

// routes for the instructors
Route::get('/instructors/index', [InstructorController::class, 'index'])->name('instructors');
Route::get('/instructors/show/{id}', [InstructorController::class, 'show'])->name('instructor.show');
Route::get('/instructors/create', [InstructorController::class, 'create'])->name('instructor.create');
Route::post('/instructors/store', [InstructorController::class, 'store'])->name('instructors.store');

// routes for the departments
Route::get('/departments/index', [DepartmentController::class, 'index'])->name('departments');
Route::get('/departments/show/{id}', [DepartmentController::class, 'show'])->name('department.show');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');


//routes for the students
Route::get('/students/index', [StudentController::class, 'index'])->name('students');
Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('student.show');
Route::get('/students/{id}/assign-courses', [StudentController::class, 'showAssignForm'])->name('students.assign.form');
Route::post('/students/{id}/assign-courses', [StudentController::class, 'assignCourses'])->name('students.assignCourses');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');