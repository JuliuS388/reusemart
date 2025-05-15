@extends('layouts.layout')
@section('title', 'Create/Edit Penitip')
@section('content')

@include('components.form',[
    'action' => isset($penitip) ? route('update_penitip', $penitip->id_penitip): '/penitip' ,
    'method' => isset($penitip) ? 'PUT' : 'POST',
    'title' => 'Create/Edit Penitip',
    'is_edit' => isset($penitip),
    'fields' => [
        'nama_penitip' => [
            'label' => 'Nama',
            'type' => 'text',
            'value' => old('nama', $penitip->nama_penitip ?? ''),
            'placeholder' => 'Nama Penitip',
            'required' => true,
        ],
        'email_penitip' => [
            'label' => 'Email',
            'type' => 'text',
            'value' => old('email', $penitip->email_penitip ?? ''),
            'placeholder' => 'Email Penitip',
            'required' => true,
        ],
        'noTelp_penitip' => [
            'label' => 'Kontak',
            'type' => 'text',
            'value' => old('kontak',  $penitip->noTelp_penitip ??''),
            'placeholder' => 'Kontak Penitip',
            'required' => true,
        ],
        'saldo_penitip' => [
            'label' => 'Saldo',
            'type' => 'text',
            'value' => old('saldo', $penitip->saldo_penitip ?? ''),
            'placeholder' => 'Saldo Penitip',
            'required' => true,
        ],
        'poin_penitip' => [
            'label' => 'Poin',
            'type' => 'text',
            'value' => old('poin', $penitip->poin_penitip ?? ''),
            'placeholder' => 'Poin Penitip',
            'required' => true,
        ],
        'rating_penitip' => [
            'label' => 'Rating',
            'type' => 'text',
            'value' => old('rating', $penitip->rating_penitip ?? ''),
            'placeholder' => 'Rating Penitip',
            'required' => true,
        ],
        'username_penitip' => [
            'label' => 'Username',
            'type' => 'text',
            'value' => old('username', $penitip->username_penitip ?? ''),
            'placeholder' => 'Username Penitip',
            'required' => true,
        ],
        'password_penitip' => [
            'label' => 'Password',
            'type' => 'password',
            'value' => old('password', $penitip->password_penitip ?? ''),
            'placeholder' => 'Password Penitip',
            'required' => true,
        ],

    ],
    'button_text' => 'Simpan Penitip',
])
    


@endsection