<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\RequestDonasiController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login.form')->with('success', 'Berhasil logout.');
})->name('logout');


Route::resource('pegawai', PegawaiController::class);

Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::get('/produk/{id}', [MainPageController::class, 'showPublic'])->name('main_page.show');

Route::get('/request-donasi', [RequestDonasiController::class, 'index'])->name('request-donasi.index');
Route::post('/request-donasi/accept/{id}', [RequestDonasiController::class, 'storeDonasi'])->name('request-donasi.store-donasi');
Route::get('/histori-donasi', [RequestDonasiController::class, 'historiDonasi'])->name('donasi.histori');
Route::post('/donasi/update/{id}', [RequestDonasiController::class, 'updateDonasi'])->name('donasi.update');



Route::resource('barang', BarangController::class);
Route::get('/barang/{id}/nota/preview', [BarangController::class, 'previewNota'])->name('barang.previewNota');
Route::get('/barang/{id}/nota/cetak', [BarangController::class, 'cetakNota'])->name('barang.cetakNota');
Route::get('/barang/{id}/nota/view-pdf', [BarangController::class, 'viewPdfNota'])->name('barang.viewPdfNota');


