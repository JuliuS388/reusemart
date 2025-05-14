@extends('layouts.layout')
@section('title', 'Produk')

@section('content')

<div class='flex flex-col gap-5'>
    <div class="flex justify-between">
        <h1 class="text-3xl font-bold">Produk</h1>
        <a class="bg-green-500 cursor-pointer hover:bg-green-700 text-white px-4 py-2 rounded-lg" href="/create-edit-produk">Add Produk</a>
    </div>

    <table class="table-auto border-gray-200">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Status Stok</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
            <tr class="border-b-2 border-gray-200">
                <td class="p-3">{{ $produk->id }}</td>
                <td class="p-3">{{ $produk->nama }}</td>
                <td class="p-3">{{ $produk->harga }}</td>
                <td class="p-3">{{ $produk->status }}</td>

                <td class="flex gap-3 p-2 items-center justify-center">
                    <a href="/create-edit-produk?id={{ $produk->id }}" class="bg-yellow-600 cursor-pointer hover:bg-yellow-700 text-white px-4 py-2 rounded-lg">Edit</a>

                    <form action="/produk/{{ $produk->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 cursor-pointer hover:bg-red-700 text-white px-4 py-2 rounded-lg">Delete</button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>


@endsection