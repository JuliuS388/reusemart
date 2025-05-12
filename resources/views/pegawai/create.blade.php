<!-- resources/views/pegawai/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
</head>
<body>
    <h1>Tambah Pegawai</h1>

    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama_pegawai" required><br>

        <label>Email:</label><br>
        <input type="email" name="email_pegawai" required><br>

        <label>Username:</label><br>
        <input type="text" name="username_pegawai" required><br>

        <label>Password:</label><br>
        <input type="text" name="password_pegawai" required><br>

        <label>Jabatan:</label><br>
        <select name="id_jabatan" required>
            @foreach($jabatans as $jabatan)
                <option value="{{ $jabatan->id_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('pegawai.index') }}">Kembali</a>
</body>
</html>
