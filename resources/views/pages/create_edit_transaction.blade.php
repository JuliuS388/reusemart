@extends('layouts.layout')
@section('title', 'Create Produk')
@section('content')

@include('components.form', [
'action' => '/transactions',
'method' => 'POST',
'is_edit' => false,
'title' => 'Create Transaction',
'form_type' => 'create',

'fields' => [
    'nomor_nota' => [
        'label' => 'Nomor Nota',
        'type' => 'text',
        'value' => '',
        'placeholder' => 'Enter Nomor Nota',
        'required' => true,
    ],

    'status_transaksi' => [
        'label' => 'Status',
        'type' => 'text',
        'value' => '',
        'placeholder' => 'Enter Status',
        'required' => true,
    ],
    
    'total_harga' => [
        'label' => 'Total Harga',
        'type' => 'text',
        'value' => '',
        'placeholder' => 'Enter Total Harga',
        'required' => true,
    ],
    'id_pembeli' => [
        'label' => 'ID Pembeli',
        'type' => 'number',
        'value' => '1',
        'placeholder' => 'Enter ID Pembeli',
        'required' => true,]
    ],

    
'button_text' => 'Create Transaction',
])

@endsection