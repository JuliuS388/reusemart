@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Tombol Kembali -->
    <div class="mb-3">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            &larr; Kembali
        </a>
    </div>


    <div class="row">
        <!-- Foto Produk -->
        <div class="col-md-6">
            <div id="fotoCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                <div class="carousel-inner rounded">
                    @if($barang->foto1_barang)
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $barang->foto1_barang) }}" class="d-block w-100" alt="Foto 1">
                        </div>
                    @endif
                    @if($barang->foto2_barang)
                        <div class="carousel-item {{ !$barang->foto1_barang ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $barang->foto2_barang) }}" class="d-block w-100" alt="Foto 2">
                        </div>
                    @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#fotoCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#fotoCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <!-- Detail Produk -->
        <div class="col-md-6">
            <h4 class="fw-bold">{{ $barang->nama_barang }}</h4>
            <div class="text-muted mb-2">Kode Produk: {{ $barang->kode_produk }}</div>
            <div class="mb-3">
                <span class="fs-4 fw-semibold text-danger">Rp{{ number_format($barang->harga_barang, 0, ',', '.') }}</span>
            </div>

            <!-- Jumlah & Stok -->
            <div class="mb-3 d-flex align-items-center">
                <label class="me-2">Jumlah:</label>
                <button class="btn btn-outline-secondary btn-sm">-</button>
                <input type="text" class="form-control mx-2 text-center" style="width: 50px;" value="1" readonly>
                <button class="btn btn-outline-secondary btn-sm">+</button>
                <span class="ms-3 text-muted">Stok: {{ $barang->stok ?? '1' }}</span>
            </div>

            <!-- Tombol -->
            <div class="d-flex gap-2">
                <button class="btn btn-success w-50">+ Keranjang</button>
                <button class="btn btn-outline-success w-50">Beli</button>
            </div>
        </div>
    </div>
</div>
@endsection
