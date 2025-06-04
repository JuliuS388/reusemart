<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailTransaksi;

class PembeliController extends Controller
{
    public function profil()
    {
        $pembeli = session('pembeli');

        if (!$pembeli) {
            return redirect()->route('home');
        }

        return view('pembeli.profil', compact('pembeli'));
    }

    public function riwayatTransaksi()
    {
        $pembeli = session('pembeli');

        if (!$pembeli) {
            return redirect()->route('login.form')->with('error', 'Silakan login terlebih dahulu.');
        }

        $transaksis = $pembeli->transaksi()->with(['detailTransaksi.barang.penitip'])->orderByDesc('tanggal_transaksi')->get();

        return view('pembeli.riwayat_transaksi', compact('transaksis'));
    }

    public function beriRating(Request $request, $id_detail_transaksi)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
    ]);

    $detail = DetailTransaksi::findOrFail($id_detail_transaksi);
    $detail->rating = $request->rating;
    $detail->save();

    if ($detail->barang && $detail->barang->penitip) {
        $detail->barang->penitip->updateRating();
    }

    return back()->with('success', 'Rating berhasil disimpan.');
}


}

