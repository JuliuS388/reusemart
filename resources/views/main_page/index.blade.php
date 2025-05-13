@extends('layouts.app')

@section('content')
<div class="container">

    <div id="promoCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="p-5 rounded-4 text-white d-flex justify-content-between align-items-center" style="background-color: #42b549;">
                    <div>
                        <h2 class="fw-bold">Yuk, belanja di ReuseMart</h2>
                        <p class="fs-5">Cek barang dari beragam kategori</p>
                        <a href="#produk" class="btn btn-light fw-semibold px-4">Cek Sekarang</a>
                    </div>
                    <img src="{{ asset('images/maskot.png') }}" alt="Banner Image" class="img-fluid" style="max-height: 200px;">
                </div>
            </div>
        </div>
    </div>

    <h4 id="produk" class="mb-4">Produk Terbaru</h4>
    <div class="row">
        @foreach($barangs as $barang)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('storage/' . $barang->foto_thumbnail) }}" class="card-img-top" alt="{{ $barang->nama_barang }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h6 class="card-title fw-bold">{{ $barang->nama_barang }}</h6>
                    <p class="text-success fw-semibold">Rp{{ number_format($barang->harga, 0, ',', '.') }}</p>
                    <a href="{{ route('main_page.show', $barang->id_barang) }}" class="btn btn-outline-success w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
