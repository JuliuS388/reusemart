<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenitipController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified']);

Route::get('/produk', function () {
    return view('pages.produk');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/create-edit-transaction', [TransaksiController::class, 'create_edit_transaksi'])->middleware(['auth', 'verified']);
Route::get('/transactions', [TransaksiController::class, 'get_all_transaksi'])->middleware(['auth', 'verified']);
Route::get('/transactions/{id}', [TransaksiController::class, 'lihat_transaksi'])->middleware(['auth', 'verified']);
Route::post('/transactions', [TransaksiController::class, 'buat_transaksi'])->middleware(['auth', 'verified']);
Route::delete('/transactions/{id}', [TransaksiController::class, 'hapus_transaksi'])->middleware(['auth', 'verified']);

Route::get('/create-edit-penitip', [PenitipController::class, 'create_edit_penitip'])->middleware(['auth', 'verified']);
Route::get('/penitip', [PenitipController::class, 'get_all_penitip'])->middleware(['auth', 'verified']);
Route::get('/penitip/{id_penitip}', [PenitipController::class, 'lihat_penitip'])->middleware(['auth', 'verified']);
Route::post('/penitip', [PenitipController::class, 'tambah_penitip'])->middleware(['auth', 'verified']);
Route::put('/penitip/{id_penitip}', [PenitipController::class, 'update_penitip'])->name('update_penitip')->middleware(['auth', 'verified']);
Route::delete('/penitip/{id_penitip}', [PenitipController::class, 'hapus_penitip'])->middleware(['auth', 'verified']);

Route::get('/create-edit-produk', [ProdukController::class, 'create_edit_produk'])->middleware(['auth', 'verified']);
Route::get('/produk', [ProdukController::class,'get_all_produk'])->middleware(['auth', 'verified']);
Route::post('/produk', [ProdukController::class,'create_produk'])->middleware(['auth', 'verified']);
Route::put('/produk/{id}', [ProdukController::class,'update_produk'])->name('update_produk')->middleware(['auth', 'verified']);
Route::delete('/produk/{id}', [ProdukController::class,'hapus_produk'])->middleware(['auth', 'verified']);



