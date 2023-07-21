<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\attendenceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/Login', function () {
    return view('Login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Add_Students', function () {
    return view('add_student');
});
Route::get('/Teacher_Panel', function () {
    return view('teacher_panel');
});
Route::get('/teacher_signup', function () {
    return view('teacher_signup');
});
Route::get('/view_details', function () {
    return view('view_details');
});
Route::post('student_data',[StudentController::class,'insert']);
Route::get('/Teacher_Panel',[StudentController::class,'readData']);
// Route::get('/view_details/{id}', [StudentController::class,'show']);
Route::get('/edit/{id}', [StudentController::class,'edit']);
Route::put('/updated_student_data/{id}', [StudentController::class,'update']);
Route::get('/delete/{id}', [StudentController::class,'destroy']);


Route::post('teacher_data',[teacherController::class,'insert']);
Route::post('login',[teacherController::class,'customLogin']);

Route::post('/save_attendance/{id}',[attendenceController::class,'store']);

