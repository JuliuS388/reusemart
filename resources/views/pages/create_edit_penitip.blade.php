@extends('layouts.layout')
@section('title', 'Create/Edit Penitip')
@section('content')

@include('components.form',[
    'action' => isset($penitip) ? route('update_penitip', $penitip->id): '/penitip' ,
    'method' => isset($penitip) ? 'PUT' : 'POST',
    'title' => 'Create/Edit Penitip',
    'is_edit' => isset($penitip),
    'fields' => [
        'nama' => [
            'label' => 'Nama',
            'type' => 'text',
            'value' => old('nama', $penitip->nama ?? ''),
            'placeholder' => 'Nama Penitip',
            'required' => true,
        ],
        'kontak' => [
            'label' => 'Kontak',
            'type' => 'text',
            'value' => old('kontak',  $penitip->kontak ??''),
            'placeholder' => 'Kontak Penitip',
            'required' => true,
        ],
    ],
    'button_text' => 'Simpan Penitip',
])
    


@endsection