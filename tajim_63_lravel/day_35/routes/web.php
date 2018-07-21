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
Route::get('/', function (){
    return view('index');
});

Route::get('/dashboard', function (){
    return view('admin.index');
});

Route::get('/user/create', function (){
    return view('admin.user.create');
});

Route::resource('/dashboard/categories', 'CategoriesController');
Route::resource('/dashboard/user', 'UserController');

//Route::get('/','HomeController@welcome');

Route::get('/about','HomeController@about');

Route::get('/contact','HomeController@contact');

Route::get('/user/{id}/{name}', 'HomeController@user');
