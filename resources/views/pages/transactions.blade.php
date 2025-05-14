@extends('layouts.layout')

@section('title', 'Transactions')

@section('content')

<div class="flex flex-col gap-5">

  <div class="flex justify-between">
    <h1 class="text-3xl font-bold">Transaksi</h1>
    <a href='/create-edit-transactions' class="bg-green-500 cursor-pointer hover:bg-green-700 text-white px-4 py-2 rounded-lg">Add Transaction</a>
  </div>


  <table class="table-auto border-gray-200 ">
    <thead>
      <th>Id Transaksi</th>
      <th>Tanggal Transaksi</th>
      <th>Id Pembeli</th>
      <th>Nomor Nota</th>
      <th>Harga Barang</th>
      <th>Status Transaksi</th>
      <th>Actions</th>
    </thead>
    <tbody>
      @foreach ($transaksis as $transaksi)
      <tr class="border-b-2 border-gray-200">
        <td class="p-3">{{ $transaksi->id_transaksi }}</td>
        <td class="p-3">{{ $transaksi->tanggal_transaksi }}</td>
        <td class="p-3">{{ $transaksi->id_pembeli }}</td>
        <td class="p-3">{{ $transaksi->nomor_nota }}</td>
        <td class="p-3">Rp. {{ $transaksi->total_harga }}</td>
        <td class="p-3">{{ $transaksi->status_transaksi }}</td>

        <td>
          <form action="/transactions/{{ $transaksi->id_transaksi }}" method="POST" class="flex gap-2">
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