<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Factory as Factory;
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
// ** @var \Illuminate\Database\Eloquent\Factory $faker */
// $nilaiAwal = 1;
Route::get('/', 'BiodataController@index');
