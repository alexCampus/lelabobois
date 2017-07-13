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
    return view('home');
});

Route::get('upload', 'uploadController@index')->middleware('auth');
Route::post('upload', 'uploadController@index')->middleware('auth');
Route::post('store', 'uploadController@store')->middleware('auth');
Route::post('remove', 'uploadController@remove')->middleware('auth');
Auth::routes();

Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});


