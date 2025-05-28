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
            })
            ->where('status_barang', 'tersedia')
            ->latest()
            ->take(12)
            ->get();

        return view('main_page.index', compact('barangs', 'search'));
    }

    public function showPublic($id)
    {
        $barang = Barang::findOrFail($id);
        return view('main_page.show', compact('barang'));
    }
}
