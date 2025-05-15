<h1>Tambah Barang</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Barang:</label>
    <input type="text" name="nama_barang"><br>

    <label>Deskripsi Barang:</label>
    <input type="text" name="deskripsi_barang"><br>

    <label>Berat Barang:</label>
    <input type="text" name="berat_barang"><br>

    <label>Kode Produk:</label>
    <input type="text" name="kode_produk"><br>

    <label>Foto Thumbnail:</label>
    <input type="file" name="foto_thumbnail"><br>

    <label>Foto 1:</label>
    <input type="file" name="foto1_barang"><br>

    <label>Foto 2:</label>
    <input type="file" name="foto2_barang"><br>

    <label>Tanggal Masuk:</label>
    <input type="date" name="tanggal_masuk"><br>

    <label>Tanggal Garansi:</label>
    <input type="date" name="tanggal_garansi"><br>

    <label>Harga Barang:</label>
    <input type="number" step="0.01" name="harga_barang"><br>

    <label>Status Barang:</label>
    <input type="text" name="status_barang"><br>

    <label>ID Kategori:</label>
    <input type="number" name="id_kategori"><br>

    <label>ID Penitip:</label>
    <input type="number" name="id_penitip"><br>

    <button type="submit">Simpan</button>
</form>
