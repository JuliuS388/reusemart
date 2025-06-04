@extends('layouts.app')

@section('content')
<div class="container position-relative">
    

    <div id="promoCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="p-5 rounded-4 text-white d-flex justify-content-between align-items-center" style="background-color: #42b549;">
                    <div>
                        <h2 class="fw-bold">Yuk, belanja di ReuseMart</h2>
                        <p class="fs-5">Cek barang dari beragam kategori</p>
                        <a href="#produk" class="btn btn-light fw-semibold px-4">Cek Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('pembeli'))
    <p>Selamat datang, {{ session('pembeli')->nama_pembeli }}</p>
    @endif


    <h4 id="produk" class="mb-4">Produk Terbaru</h4>

    @if(request('q'))
        <div class="alert alert-info">
            Menampilkan hasil pencarian untuk: <strong>{{ request('q') }}</strong>
        </div>
    @endif

    @if($barangs->count() == 0)
        <div class="text-center">
            <p class="text-muted">Tidak ada produk yang cocok dengan pencarian Anda.</p>
        </div>
    @else
    <div class="position-relative">
        <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($barangs->chunk(4) as $index => $chunk)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach($chunk as $barang)
                            <div class="col-md-3 mb-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="{{ asset('storage/' . $barang->foto_thumbnail) }}" class="card-img-top" alt="{{ $barang->nama_barang }}" style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">
                                            {!! isset($search) ? str_ireplace($search, "<mark>$search</mark>", e($barang->nama_barang)) : e($barang->nama_barang) !!}
                                        </h6>
                                        <p class="text-success fw-semibold">Rp{{ number_format($barang->harga_barang, 0, ',', '.') }}</p>
                                        <a href="{{ route('main_page.show', $barang->id_barang) }}" class="btn btn-outline-success w-100">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button class="carousel-control-prev position-absolute top-50 translate-middle-y start-0" style="width: 5%;" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next position-absolute top-50 translate-middle-y end-0" style="width: 5%;" type="button" data-bs-target="#produkCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
    @endif

</div>
@endsection
