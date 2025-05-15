<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\RequestDonasiController;

Route::resource('pegawai', PegawaiController::class);

Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::get('/produk/{id}', [MainPageController::class, 'showPublic'])->name('main_page.show');

Route::get('/request-donasi', [RequestDonasiController::class, 'index'])->name('request-donasi.index');
Route::post('/request-donasi/accept/{id}', [RequestDonasiController::class, 'storeDonasi'])->name('request-donasi.store-donasi');
Route::get('/histori-donasi', [RequestDonasiController::class, 'historiDonasi'])->name('donasi.histori');
Route::post('/donasi/update/{id}', [RequestDonasiController::class, 'updateDonasi'])->name('donasi.update');





Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
