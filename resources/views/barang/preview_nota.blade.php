@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Preview Nota Penitipan (PDF)</h2>

    <div class="mb-4">
        <iframe src="{{ route('barang.viewPdfNota', $barang->id_barang) }}" width="100%" height="600px" style="border:1px solid #ccc;"></iframe>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Return</a>

        <a href="{{ route('barang.cetakNota', $barang->id_barang) }}" class="btn btn-success">
            Download PDF
        </a>
    </div>
</div>
@endsection
