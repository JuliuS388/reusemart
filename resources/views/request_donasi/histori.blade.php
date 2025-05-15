<!DOCTYPE html>
<html>
<head>
    <title>Histori Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Histori Donasi</h2>

    <a href="{{ route('request-donasi.index') }}" class="btn btn-secondary mb-3">← Kembali ke Daftar Request</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Organisasi</th>
                <th>Request Donasi</th>
                <th>Nama Barang</th>
                <th>Tanggal Donasi</th>
                <th>Nama Penerima</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donasi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->requestDonasi->organisasi->nama_organisasi ?? 'N/A' }}</td>
                    <td>{{ $item->requestDonasi->request ?? 'N/A' }}</td>
                    <td>{{ $item->barang->nama_barang ?? 'N/A' }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_donasi)->format('d M Y') }}</td>
                    <td>{{ $item->nama_penerima }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal-{{ $item->id_donasi }}">Edit</button>
                    </td>
                </tr>

                <div class="modal fade" id="editModal-{{ $item->id_donasi }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $item->id_donasi }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" action="{{ route('donasi.update', $item->id_donasi) }}">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Donasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label>Nama Penerima</label>
                                        <input type="text" name="nama_penerima" class="form-control" value="{{ $item->nama_penerima }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tanggal Donasi</label>
                                        <input type="date" name="tanggal_donasi" class="form-control" value="{{ $item->tanggal_donasi }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
