@extends('layouts.layout')
@section('title', 'Penitip')

@section('content')

<div class="flex flex-col gap-5">
    <div class="flex justify-between">
        <h1 class="text-3xl font-bold">Penitip</h1>
        <a href='/create-edit-penitip' class="bg-green-500 cursor-pointer hover:bg-green-700 text-white px-4 py-2 rounded-lg">Add Penitip</a>

    </div>
    <table class="table-auto border-gray-200 ">
        <thead>
            <tr>
                <th>Id Penitip</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Kontak</th>
                <th>Saldo</th>
                <th>Poin</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
        <tbody>
            @foreach ($penitips as $penitip )
            <tr class="border-b-2 border-gray-200">
                <td class="p-2">{{ $penitip->id_penitip }}</td>
                <td class="p-2">{{ $penitip->nama_penitip }}</td>
                <td class="p-2">{{ $penitip->email_penitip }}</td>
                <td class="p-2">{{ $penitip->noTelp_penitip }}</td>
                <td class="p-2">{{ $penitip->saldo_penitip }}</td>
                <td class="p-2">{{ $penitip->poin_penitip }}</td>
                <td class="p-2">{{ $penitip->rating_penitip }}</td>

                <td class="flex gap-3 p-2 items-center justify-center">
                    <a href="/create-edit-penitip?id={{ $penitip->id_penitip }}" class="bg-yellow-600 cursor-pointer hover:bg-yellow-700 text-white px-4 py-2 rounded-lg">Edit</a>
                    <form method="POST" action="/penitip/{{ $penitip->id_penitip }}">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 cursor-pointer hover:bg-red-700 text-white px-4 py-2 rounded-lg">Delete</button>
                    </form>
                </td>


            </tr>

            @endforeach
        </tbody>
        </thead>
    </table>
</div>

@endsection