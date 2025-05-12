<!-- resources/views/pegawai/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Daftar Pegawai</h1>

    <a href="{{ route('pegawai.create') }}">+ Tambah Pegawai</a>
    
    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawais as $pegawai)
            <tr>
                <td>{{ $pegawai->nama_pegawai }}</td>
                <td>{{ $pegawai->email_pegawai }}</td>
                <td>{{ $pegawai->username_pegawai }}</td>
                <td>{{ $pegawai->jabatan->nama_jabatan }}</td>
                <td>
                    <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}">Edit</a>
                    <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
