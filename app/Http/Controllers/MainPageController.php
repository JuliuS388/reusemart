<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class MainPageController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('q');

    $barangs = Barang::when($search, function ($query, $search) {
        return $query->where('nama_barang', 'like', '%' . $search . '%');
    })->latest()->take(12)->get();

    $pembeli = session('pembeli'); // akses data pembeli

    return view('main_page.index', compact('barangs', 'pembeli'));
}


    public function showPublic($id)
    {
        $barang = Barang::findOrFail($id);
        return view('main_page.show', compact('barang'));
    }
}