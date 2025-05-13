<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class MainPageController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('main_page.index', compact('barang'));
    }

    public function showPublic($id)
    {
        $barang = Barang::findOrFail($id);
        return view('main_page.show', compact('barang'));
    }
}
