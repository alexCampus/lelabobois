<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('imgCharpente', 'apiController@imgCharpente');
Route::get('imgMenuiserie', 'apiController@imgMenuiserie');
Route::get('imgCouverture', 'apiController@imgCouverture');
Route::get('imgZinguerie', 'apiController@imgZinguerie');
Route::get('imgRenovation', 'apiController@imgRenovation');
Route::get('imgConstruction', 'apiController@imgConstruction');
