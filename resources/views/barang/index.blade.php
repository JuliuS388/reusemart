@extends('layouts.app_dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Barang</h2>
    <a href="{{ route('barang.create') }}" class="btn btn-primary">+ Tambah Barang</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="{{ route('barang.index') }}" method="GET" class="input-group mb-3">
    <input type="text" name="search" class="form-control" placeholder="Cari barang..." value="{{ request('search') }}">
    <button type="submit" class="btn btn-outline-primary">Cari</button>
</form>

<div class="table-responsive">
    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>Nama</th>
                <th>Kode</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Batas Masa Penitipan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
            <tr>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->kode_produk }}</td>
                <td>Rp{{ number_format($item->harga_barang, 0, ',', '.') }}</td>
                <td>{{ $item->status_barang }}</td>
                <td>
                    @if($item->foto_thumbnail)
                        <img src="{{ asset('storage/' . $item->foto_thumbnail) }}" width="70">
                    @endif
                </td>
                <td>
                    @if($item->tanggal_batas_penitipan)
                        {{ \Carbon\Carbon::parse($item->tanggal_batas_penitipan)->format('d-m-Y') }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="{{ route('barang.show', $item->id_barang) }}" class="btn btn-sm btn-info">Detail</a>
                    <a href="{{ route('barang.edit', $item->id_barang) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('barang.destroy', $item->id_barang) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            Hapus
                        </button>
                    </form>
                    <a href="{{ route('barang.previewNotaPenitip', $item->id_penitip) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                        Cetak Nota
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
