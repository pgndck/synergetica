<?php

use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Home
 */

Route::get('/', fn() => view('home'))->name('home');

/**
 * Courses
 */

Route::get('courses', fn() => view('course.list', [
    'courses' => Course::with('students')->get()
]))->name('courses');

Route::get('course/{course}', fn($id) => view('course.single', [
    'course' => Course::find($id)
]))->name('course');

/**
 * Students
 */

Route::get('students', fn() => view('student.list', [
    'students' => Student::with('courses')->get()
]))->name('students');

Route::get('student/{student}', fn($id) => view('student.single', [
    'student' => Student::find($id)
]))->name('student');
