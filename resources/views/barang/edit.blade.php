<h1>Edit Barang</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

@if($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('barang.update', $barang->id_barang) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}"><br>

    <label>Kode Produk:</label>
    <input type="text" name="kode_produk" value="{{ old('kode_produk', $barang->kode_produk) }}"><br>

    <label>Foto Thumbnail:</label>
    <input type="file" name="foto_thumbnail"><br>
    @if($barang->foto_thumbnail)
        <img src="{{ asset('storage/' . $barang->foto_thumbnail) }}" width="100"><br>
    @endif

    <label>Foto 1:</label>
    <input type="file" name="foto1_barang"><br>
    @if($barang->foto1_barang)
        <img src="{{ asset('storage/' . $barang->foto1_barang) }}" width="100"><br>
    @endif

    <label>Foto 2:</label>
    <input type="file" name="foto2_barang"><br>
    @if($barang->foto2_barang)
        <img src="{{ asset('storage/' . $barang->foto2_barang) }}" width="100"><br>
    @endif

    <label>Tanggal Masuk:</label>
    <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk', $barang->tanggal_masuk) }}"><br>

    <label>Perpanjangan:</label>
    <input type="text" name="perpanjangan" value="{{ old('perpanjangan', $barang->perpanjangan) }}"><br>

    <label>Harga Barang:</label>
    <input type="number" step="0.01" name="harga_barang" value="{{ old('harga_barang', $barang->harga_barang) }}"><br>

    <label>Status Barang:</label>
    <input type="text" name="status_barang" value="{{ old('status_barang', $barang->status_barang) }}"><br>

    <label>ID Kategori:</label>
    <input type="number" name="id_kategori" value="{{ old('id_kategori', $barang->id_kategori) }}"><br>

    <label>ID Penitip:</label>
    <input type="number" name="id_penitip" value="{{ old('id_penitip', $barang->id_penitip) }}"><br>

    <button type="submit">Update</button>
</form>
