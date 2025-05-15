<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenitipController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/create-edit-transactions', [TransaksiController::class, 'create_edit_transaksi']);
Route::get('/transactions', [TransaksiController::class, 'get_all_transaksi']);
Route::get('/transactions/{id}', [TransaksiController::class, 'lihat_transaksi']);
Route::post('/transactions', [TransaksiController::class, 'buat_transaksi']);
Route::delete('/transactions/{id}', [TransaksiController::class, 'hapus_transaksi']);

Route::get('/create-edit-penitip', [PenitipController::class, 'create_edit_penitip']);
Route::get('/penitip', [PenitipController::class, 'get_all_penitip']);
Route::get('/penitip/{id}', [PenitipController::class, 'lihat_penitip']);
Route::post('/penitip', [PenitipController::class, 'tambah_penitip']);
Route::put('/penitip/{id}', [PenitipController::class, 'update_penitip'])->name('update_penitip');
Route::delete('/penitip/{id}', [PenitipController::class, 'hapus_penitip']);

Route::get('/create-edit-produk', [ProdukController::class, 'create_edit_produk']);
Route::get('/produk', [ProdukController::class,'get_all_produk']);
Route::post('/produk', [ProdukController::class,'create_produk']);
Route::put('/produk/{id}', [ProdukController::class,'update_produk'])->name('update_produk');
Route::delete('/produk/{id}', [ProdukController::class,'hapus_produk']);


Route::get('/login', [AuthController::class,'show_login'])->name(name: 'login');
Route::post('/login', [AuthController::class,'login']);

Route::get('/register', [AuthController::class,'show_register'])->name(name: 'register');
Route::post('/register', [AuthController::class,'register']);


