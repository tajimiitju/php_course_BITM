<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/master', function () {
    return view('admin.master');
});

Route::get('/aa', function () {
    return view('admin.index');
});

Route::get('/NewStudent', function () {
    return view('admin.add_student');
});

Route::get('/NewTeacher', function () {
    return view('admin.add_teacher');
});

Route::get('/NewAdmin', function () {
    return view('admin.add_admin');
});

Route::get('/AllStudents', function () {
    return view('admin.view_student');
});

Route::get('/AllTeachers', function () {
    return view('admin.view_teacher');
});



