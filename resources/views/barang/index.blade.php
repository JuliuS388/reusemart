<h1>Daftar Barang</h1>
<a href="{{ route('barang.create') }}">Tambah Barang</a>
<ul>
@foreach($barang as $item)
    <li>
        <img src="{{ asset('storage/' . $item->foto_thumbnail) }}" width="100">
        <a href="{{ route('barang.show', $item->id_barang) }}">{{ $item->nama_barang }}</a>
    </li>
@endforeach
</ul>
