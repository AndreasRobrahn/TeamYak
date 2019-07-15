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
    return view('welcomepage');
});  

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/Welcome',function() {
  return view ('welcomepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/area51', function () {
    return view('start');
})->middleware('auth');

Route::get('/NewUser', function () {
    return view('newUser');
})->middleware('auth');

Route::get('/AllVideos','DataController@ShowAllVideos');

Route::get('/ViUpl', function () {
    return view('formVideoUpload');
})->middleware('auth');
