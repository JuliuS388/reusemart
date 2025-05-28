<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\KategoriBarang;
use App\Models\Penitip;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;


class BarangController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $barangQuery = Barang::with(['kategori', 'penitip', 'pegawai']);

        if ($search) {
            $barangQuery->where('nama_barang', 'like', "%$search%")
                        ->orWhere('kode_produk', 'like', "%$search%");
        }

        $barang = $barangQuery->get();

        return view('barang.index', compact('barang'));
    }

    public function show($id)
    {
        $barang = Barang::with(['kategori', 'penitip', 'pegawai'])->findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function create()
    {
        $kategoris = KategoriBarang::all();
        $penitips = Penitip::all();
        $pegawais = Pegawai::all();

        return view('barang.create', compact('kategoris', 'penitips', 'pegawais'));
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
            'tanggal_garansi' => 'nullable|date',
            'harga_barang' => 'required|numeric',
            'status_barang' => 'required|string|max:255',
            'id_kategori' => 'required|integer|exists:kategori_barang,id_kategori',
            'id_penitip' => 'required|integer|exists:penitip,id_penitip',
            'id_pegawai' => 'required|integer|exists:pegawai,id_pegawai',
            'deskripsi_barang' => 'nullable|string',
            'berat_barang' => 'nullable|string|max:255',
        ]);

        // Upload foto jika ada
        foreach (['foto_thumbnail', 'foto1_barang', 'foto2_barang'] as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('barang', 'public');
            }
        }

        Barang::create($validated);

        $barangBaru = Barang::latest()->first();
        return redirect()->route('barang.previewNota', $barangBaru->id_barang);


    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $kategori = KategoriBarang::all();
        $penitip = Penitip::all();
        $pegawai = Pegawai::all();

        return view('barang.edit', compact('barang', 'kategori', 'penitip', 'pegawai'));
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
            'tanggal_garansi' => 'nullable|date',
            'harga_barang' => 'required|numeric',
            'status_barang' => 'required|string|max:255',
            'id_kategori' => 'required|integer|exists:kategori_barang,id_kategori',
            'id_penitip' => 'required|integer|exists:penitip,id_penitip',
            'id_pegawai' => 'required|integer|exists:pegawai,id_pegawai',
            'deskripsi_barang' => 'nullable|string',
            'berat_barang' => 'nullable|string|max:255',
        ]);

        // Upload foto dan hapus file lama jika ada
        foreach (['foto_thumbnail', 'foto1_barang', 'foto2_barang'] as $field) {
            if ($request->hasFile($field)) {
                if ($barang->$field) {
                    Storage::disk('public')->delete($barang->$field);
                }
                $validated[$field] = $request->file($field)->store('barang', 'public');
            }
        }

        $barang->update($validated);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        // Hapus foto yang tersimpan
        foreach (['foto_thumbnail', 'foto1_barang', 'foto2_barang'] as $field) {
            if ($barang->$field) {
                Storage::disk('public')->delete($barang->$field);
            }
        }

        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }

    public function previewNota($id)
    {
        $barang = Barang::with(['penitip', 'pegawai'])->findOrFail($id);
        return view('barang.preview_nota', compact('barang'));
    }

    public function viewPdfNota($id)
    {
        $barang = Barang::with(['penitip', 'pegawai'])->findOrFail($id);
        $pdf = Pdf::loadView('barang.nota', compact('barang'));

        return $pdf->stream('preview-nota-barang.pdf');
    }


    public function cetakNota($id)
    {
        $barang = Barang::with(['penitip', 'pegawai'])->findOrFail($id);
        $pdf = Pdf::loadView('barang.nota', compact('barang'));

        return $pdf->download('nota-penitipan-barang-' . $barang->id_barang . '.pdf');
    }



}

