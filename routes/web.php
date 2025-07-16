<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dasboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\pengumumanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('layouts.template');
// })->middleware('auth');

// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth');




Auth::routes();

// dasboard
Route::get('/', [\App\Http\Controllers\dasboardController::class, 'index'])->middleware('auth');

// kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/tambah', [KelasController::class, 'create']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::put('/kelas/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);

// guru
Route::get('/guru', [guruController::class, 'index']);
Route::get('/guru/tambah', [guruController::class, 'create']);
Route::post('/guru', [guruController::class, 'store']);
Route::get('/guru/edit/{id}', [guruController::class, 'edit']);
Route::put('/guru/{id}', [guruController::class, 'update']);
Route::delete('/guru/{id}', [guruController::class, 'destroy']);

// siswa
Route::get('/siswa', [siswaController::class, 'index']);
Route::get('/siswa/tambah', [siswaController::class, 'create']);
Route::post('/siswa', [siswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [siswaController::class, 'edit']);
Route::put('/siswa/{id}', [siswaController::class, 'update']);
Route::delete('/siswa/{id}', [siswaController::class, 'destroy']);

// pengumuman
Route::get('/pengumuman', [pengumumanController::class, 'index']);
Route::get('/pengumuman/tambah', [pengumumanController::class, 'create']);
Route::post('/pengumuman', [pengumumanController::class, 'store']);
Route::get('/pengumuman/edit/{id}', [pengumumanController::class, 'edit']);
Route::put('/pengumuman/{id}', [pengumumanController::class, 'update']);
Route::delete('/pengumuman/{id}', [pengumumanController::class, 'destroy']);


Route::get('/jumlah-kelas', function () {
    return Kelas::count();
});


