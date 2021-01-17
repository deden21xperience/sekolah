<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
// Route::get('/', 'BiodataController@index');
Route::get('/', function () {

  // $data = DB::connection('mysql2')->select("select * from provinces");
  // $data = DB::connection('mysql2')->table('provinces')->paginate(5);
  // return response()->json($data);
  // $tes = DB::connection("mysql2")->ss
  // return $tes;
  return view('layouts.index');
});
