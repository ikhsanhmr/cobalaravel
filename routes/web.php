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

//ROOT
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = 'Muhamamd Ikhsan';
    return view('about',['nama'=>$nama]);
});

Route::get('/post/create', 'PostController@create');


Route::post('/post/store', 'PostController@store');


Route::get('/blog', 'PostController@index');

Route::get('/blog', 'PostController@index');


Route::resource('post', 'PostController2');

//Route::get('/students', 'StudentsController@index');
//Route::get('/students/create', 'StudentsController@create');
//Route::get('/students/{student}', 'StudentsController@show');
//Route::post('/students', 'StudentsController@store');

Route::resource('students','studentsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
