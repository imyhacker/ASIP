<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
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
    Route::get('/siswa/{id}/hapus_siswa', [AdminController::class, 'hapus_siswa'])->name('hapus_siswa', $id);
    Route::post('/siswa/{id}/edit/update', [AdminController::class, 'update_siswa'])->name('update_siswa', $id);
    Route::get('/att/data_presensi', [AdminController::class, 'data_presensi'])->name('data_presensi');
    

    // Kelas
    Route::post('/siswa/tambah_kelas', [AdminController::class, 'tambah_kelas'])->name('tambah_kelas');

    // GURU
    Route::get('/guru', [AdminController::class, 'guru'])->name('data_guru');
    Route::post('/guru/tambah_guru', [AdminController::class, 'tambah_guru'])->name('tambah_guru');
    Route::post('/guru/upload_guru', [AdminController::class, 'upload_guru'])->name('upload_guru');
    Route::get('/guru/{id}/hapus_guru', [AdminController::class, 'hapus_guru'])->name('hapus_guru', $id);
    Route::get('/guru/{id}/edit', [AdminController::class, 'edit_guru'])->name('edit_guru', $id);
    Route::post('/guru/{id}/edit/update', [AdminController::class, 'update_guru'])->name('update_guru', $id);
});


Route::group(['prefix' => 'home/attendance', 'middleware' => 'can:isSiswa'], function(){
    Route::get('/absensi', [SiswaController::class, 'index'])->name('absensi');
    Route::post('/absensi/masuk', [SiswaController::class, 'masuk'])->name('masuk');
});