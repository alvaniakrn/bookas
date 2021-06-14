<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MainController;

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
    return view('landingpage');
});

Route::get('/data-pasien', [MainController::class, 'dataPasien']);
Route::get('/pasien/{id}', [MainController::class, 'getSinglePasien']);

Route::get('/data-dokter', [MainController::class, 'dataDokter']);
Route::get('/dokter/{id}', [MainController::class, 'getSingleDokter']);
Route::get('/cari-dokter', [MainController::class, 'searchDokter']);
Route::get('/cari-pasien', [MainController::class, 'searchPasien']);
Route::get('/cari-kunjungan', [MainController::class, 'searchKunjungan']);

Route::post('/cari-dokter', [MainController::class, 'hasilSearchDokter']);
Route::post('/cari-pasien', [MainController::class, 'hasilSearchPasien']);
Route::post('/cari-kunjungan', [MainController::class, 'hasilSearchKunjungan']);
Route::post('/cari', [MainController::class, 'search']);