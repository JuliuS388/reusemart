<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
class BarangController extends Controller
{
    public function index() {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function show($id) {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }
    

    public function create() {
        return view('barang.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_barang' => 'required|string|max:255',
        'kode_produk' => 'required|string|max:255',
        'foto_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'foto1_barang' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'foto2_barang' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'tanggal_masuk' => 'required|date',
        'perpanjangan' => 'nullable|string|max:255',
        'harga_barang' => 'required|numeric',
        'status_barang' => 'required|string|max:255',
        'id_kategori' => 'required|integer',
        'id_penitip' => 'required|integer',
        'deskripsi_barang' => 'nullable|string',
        'berat_barang' => 'nullable|string|max:255',
    ]);

    if ($request->hasFile('foto_thumbnail')) {
        $validated['foto_thumbnail'] = $request->file('foto_thumbnail')->store('barang', 'public');
    }

    if ($request->hasFile('foto1_barang')) {
        $validated['foto1_barang'] = $request->file('foto1_barang')->store('barang', 'public');
    }

    if ($request->hasFile('foto2_barang')) {
        $validated['foto2_barang'] = $request->file('foto2_barang')->store('barang', 'public');
    }

    Barang::create($validated);

    return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
}


    public function edit($id) {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

public function update(Request $request, $id)
{
    $barang = Barang::findOrFail($id);

    $validated = $request->validate([
        'nama_barang' => 'required|string|max:255',
        'kode_produk' => 'required|string|max:255',
        'foto_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'foto1_barang' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'foto2_barang' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'tanggal_masuk' => 'required|date',
        'perpanjangan' => 'nullable|string|max:255',
        'harga_barang' => 'required|numeric',
        'status_barang' => 'required|string|max:255',
        'id_kategori' => 'required|integer',
        'id_penitip' => 'required|integer',
        'deskripsi_barang' => 'nullable|string',
        'berat_barang' => 'nullable|string|max:255',
    ]);

    if ($request->hasFile('foto_thumbnail')) {
        if ($barang->foto_thumbnail) {
            Storage::disk('public')->delete($barang->foto_thumbnail);
        }
        $validated['foto_thumbnail'] = $request->file('foto_thumbnail')->store('barang', 'public');
    }

    if ($request->hasFile('foto1_barang')) {
        if ($barang->foto1_barang) {
            Storage::disk('public')->delete($barang->foto1_barang);
        }
        $validated['foto1_barang'] = $request->file('foto1_barang')->store('barang', 'public');
    }

    if ($request->hasFile('foto2_barang')) {
        if ($barang->foto2_barang) {
            Storage::disk('public')->delete($barang->foto2_barang);
        }
        $validated['foto2_barang'] = $request->file('foto2_barang')->store('barang', 'public');
    }

    $barang->update($validated);

    return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
}

}

