<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'home/data', 'middleware' => 'can:isGuru'], function($id = null, $kelas = null){

    // SISWA
    Route::get('/siswa', [AdminController::class, 'siswa'])->name('data_siswa');
    Route::post('/siswa/tambah_manual', [AdminController::class, 'tambah_manual'])->name('tambah_manual');
    Route::post('/siswa/tambah_upload', [AdminController::class, 'tambah_upload'])->name('tambah_upload');

    Route::get('/siswa/{id}/edit', [AdminController::class, 'edit_siswa'])->name('edit_siswa', $id);
    Route::get('/siswa/{id}/edit/hapus_foto', [AdminController::class, 'hapus_foto'])->name('hapus_foto', $id);
    Route::post('/siswa/{id}/edit/update', [AdminController::class, 'update_siswa'])->name('update_siswa', $id);
    

    // KELAS
    Route::post('/siswa/tambah_kelas', [AdminController::class, 'tambah_kelas'])->name('tambah_kelas');



});