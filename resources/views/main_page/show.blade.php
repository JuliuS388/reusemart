@extends('layouts.app')

@section('content')
<a href="{{ route('home') }}" class="btn btn-secondary mb-3">← Kembali ke Beranda</a>

<div class="row">
    <div class="col-md-6">
        <div id="fotoCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
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

    <div class="col-md-6">
        <h2>{{ $barang->nama_barang }}</h2>
        <p><strong>Kode Produk:</strong> {{ $barang->kode_produk }}</p>
        <p><strong>Tanggal Masuk:</strong> {{ $barang->tanggal_masuk }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($barang->harga_barang, 0, ',', '.') }}</p>
        <p><strong>Status:</strong> {{ $barang->status_barang }}</p>
        <p><strong>Perpanjangan:</strong> {{ $barang->perpanjangan ?? '-' }}</p>
    </div>
</div>
@endsection
