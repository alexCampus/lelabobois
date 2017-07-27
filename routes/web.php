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
Route::get('storage/{categorie}/{filename}', function ($categorie, $filename)
{
    $path = storage_path('app/public/' . $categorie . '/' . $filename);
    if (!File::exists($path)) {
    
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


Route::get('/', 'HomeController@index');

Route::post('/send', 'HomeController@send');

Route::get('upload', 'uploadController@index')->middleware('auth');
Route::post('upload', 'uploadController@index')->middleware('auth');
Route::post('store', 'uploadController@store')->middleware('auth');
Route::post('remove', 'uploadController@remove')->middleware('auth');
Auth::routes();

Route::match(['get', 'post'], 'register', function(){
     return redirect('/');
});


