@extends('layouts.app_dashboard')

@section('content')
    <h2 class="mb-4">Edit Pegawai</h2>

    <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email_pegawai" value="{{ $pegawai->email_pegawai }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username_pegawai" value="{{ $pegawai->username_pegawai }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir_pegawai" value="{{ $pegawai->tanggal_lahir_pegawai }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <select name="id_jabatan" class="form-select" required>
                @foreach($jabatans as $jabatan)
                    <option value="{{ $jabatan->id_jabatan }}" {{ $pegawai->id_jabatan == $jabatan->id_jabatan ? 'selected' : '' }}>
                        {{ $jabatan->nama_jabatan }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
