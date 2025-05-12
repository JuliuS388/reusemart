<!-- resources/views/pegawai/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>
    <h1>Edit Pegawai</h1>

    <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" required><br>

        <label>Email:</label><br>
        <input type="email" name="email_pegawai" value="{{ $pegawai->email_pegawai }}" required><br>

        <label>Username:</label><br>
        <input type="text" name="username_pegawai" value="{{ $pegawai->username_pegawai }}" required><br>

        <label>Password:</label><br>
        <input type="text" name="password_pegawai" value="{{ $pegawai->password_pegawai }}" required><br>

        <label>Jabatan:</label><br>
        <select name="id_jabatan" required>
            @foreach($jabatans as $jabatan)
                <option value="{{ $jabatan->id_jabatan }}" {{ $pegawai->id_jabatan == $jabatan->id_jabatan ? 'selected' : '' }}>
                    {{ $jabatan->nama_jabatan }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('pegawai.index') }}">Kembali</a>
</body>
</html>
