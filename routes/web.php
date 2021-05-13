<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/home', function () {
    return view('landingpage');
});

Route::get('/data-pasien', function () {
    return view('pasien_data');
});

Route::get('/detail-pasien', function () {
    return view('pasien_detail');
});

Route::get('/data-dokter', function () {
    return view('dokter_data');
});

Route::get('/detail-dokter', function () {
    return view('dokter_detail');
});
