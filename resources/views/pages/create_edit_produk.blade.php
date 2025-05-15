@extends('layouts.layout')
@section('title', 'Create Produk')
@section('content')

@include('components.form', [
'action' => isset($produk) ? route('update_produk', $produk->id) : '/produk',
'method' => isset($produk) ? 'PUT' : 'POST',
'title' => 'Create/Edit Produk',
'is_edit' => isset($produk),
'fields' => [
    
    'nama' => [
        'label' => 'Nama',
        'type' => 'text',
        'value' => old('nama', $produk->nama ?? ''),
        'placeholder' => 'Nama Produk',
        'required' => true,
    ],

    'status' => [
        'label' => 'Status',
        'type' => 'text',
        'placeholder' => 'Status Produk',
        'value' => old('status', $produk->status ?? ''),
        'required' => true,
        ],
    'harga' => [
        'label' => 'Harga',
        'type' => 'text',
        'placeholder' => 'Harga Produk',
        'value' => old('harga', $produk->harga ?? ''),
        'required' => true,
    ],
    'kategori' => [
        'label' => 'Kategori',
        'type' => 'text',
        'placeholder' => 'Kategori Produk',
        'value' => old('kategori', $produk->kategori ?? ''),
        'required' => true,
    ]
    ],
'button_text' => isset($produk) ? 'Update Produk' : 'Tambah Produk',
])

@endsection