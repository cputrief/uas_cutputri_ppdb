<?php

use Illuminate\Support\Facades\Route;
use App\Http\dasboardController;
use App\Http\Controllers\KelasController;


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
Route::get('/', function () {
    return view('layouts.contoh');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/daftar', function () {
    return view('contoh');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// dasboard
Route::get('/dasboard', [dasboardController::class, 'index']);
// kelas
Route::get('/kelas', [KelasController::class, 'index']);