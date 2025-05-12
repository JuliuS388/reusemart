<h1>{{ $barang->nama_barang }}</h1>
<p>Kode Produk: {{ $barang->kode_produk }}</p>
<p>Status: {{ $barang->status_barang }}</p>
<img src="{{ asset('storage/' . $barang->foto1_barang) }}" width="200">
<img src="{{ asset('storage/' . $barang->foto2_barang) }}" width="200">
<a href="{{ route('barang.edit', $barang->id_barang) }}">Edit</a>
