<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nota Penitipan</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
        }
        .title {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .info p {
            margin: 0;
            padding: 4px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="title">Nota Penitipan Barang</div>

    <div class="info">
        <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
        <p><strong>Kode Produk:</strong> {{ $barang->kode_produk }}</p>
        <p><strong>Penitip:</strong> {{ $barang->penitip->nama_penitip }}</p>
        <p><strong>Tanggal Masuk:</strong> {{ \Carbon\Carbon::parse($barang->tanggal_masuk)->format('d-m-Y') }}</p>
        <p><strong>Pegawai QC:</strong> {{ $barang->pegawai->nama_pegawai }}</p>
    </div>

    <table>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $barang->deskripsi_barang }}</td>
        </tr>
        <tr>
            <th>Berat</th>
            <td>{{ $barang->berat_barang }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>Rp {{ number_format($barang->harga_barang, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $barang->status_barang }}</td>
        </tr>
    </table>

    <p style="margin-top: 40px;">Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
</body>
</html>
