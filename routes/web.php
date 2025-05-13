<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MainPageController;

Route::resource('pegawai', PegawaiController::class);

Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::get('/produk/{id}', [MainPageController::class, 'showPublic'])->name('main_page.show');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');



// Route::get('/', function () {
//     return view('welcome');
// });
