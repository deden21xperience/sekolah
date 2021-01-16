<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// semua warga
Route::get('/members', 'BiodataController@index');
Route::post('/members', 'BiodataController@store');
Route::patch('/members/{member}', 'BiodataController@update');
Route::delete('/members/{member}', 'BiodataController@destroy');
// Guru
Route::get('/teachers', 'TeacherController@index');
Route::post('/teachers', 'TeacherController@store');
Route::patch('/teachers/{teacher}', 'TeacherController@update');
Route::delete('/teachers/{teacher}', 'TeacherController@destroy');
// Siswa
Route::get('/students', 'StudentController@index');
Route::post('/students', 'StudentController@store');
Route::patch('/students/{student}', 'StudentController@update');
Route::delete('/students/{student}', 'StudentController@destroy');
