<?php

use App\Http\Controllers\KaryawanController;
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
    $title = 'Selamat Datang';
    return view('index',[
        "title" => $title,
        
    ]);
});

Route::get('/karyawann', [KaryawanController::class, 'index']);

Route::get('/karyawann/cari', [KaryawanController::class, 'cari']);

Route::post('/karyawann/tambah', [KaryawanController::class, 'tambah']);

Route::get('/karyawann/hapus/{id}', [KaryawanController::class, 'hapus']);

Route::get('/karyawann/edit/{id}', [KaryawanController::class, 'edit']);

Route::post('/karyawann/update/{id}', [KaryawanController::class, 'update']);

Route::get('/karyawann/lihat/{id}', [KaryawanController::class, 'lihat']);

