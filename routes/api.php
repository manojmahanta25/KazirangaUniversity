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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/school', 'apiSchoolController@index');
Route::get('/school/{id}', 'apiSchoolController@show');
Route::get('/school/{id}/faculty', 'apiSchoolController@faculty');
Route::get('/faculty', 'apiFacultyController@index');
Route::get('/faculty/{id}', 'apiFacultyController@show');

