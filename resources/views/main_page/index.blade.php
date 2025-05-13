@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Selamat Datang di <strong>ReuseMart</strong></h2>

    <div id="barangCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach($barang->chunk(4) as $chunkIndex => $chunk)
            <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                <div class="row">
                    @foreach($chunk as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $item->foto_thumbnail) }}" class="card-img-top" alt="{{ $item->nama_barang }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $item->nama_barang }}</h5>
                                <a href="{{ route('main_page.show', $item->id_barang) }}" class="btn btn-primary mt-auto">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#barangCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#barangCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
@endsection
