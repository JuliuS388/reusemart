@extends('layouts.app_auth')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm border-0 p-4" style="width: 100%; max-width: 450px;">
        <h4 class="mb-3 text-center">Daftar Akun ReuseMart</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Daftar sebagai</label>
                <select name="role" class="form-select" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="admin">Admin</option>
                    <option value="owner">Owner</option>
                </select>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Daftar</button>
                <a href="{{ route('home') }}" class="btn btn-outline-secondary">Kembali ke Beranda</a>
            </div>
        </form>

        <p class="mt-3 text-center">Sudah punya akun? <a href="{{ route('login.form') }}">Masuk di sini</a></p>
    </div>
</div>
@endsection
