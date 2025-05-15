<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //

    public function create_edit_transaksi($id = null){
        if ($id) {
            $transaksi = Transaksi::find($id);
            return view('pages.create_edit_transaction', compact('transaksi'));
        }
        return view('pages.create_edit_transaction');
    }

    public function get_all_transaksi(){
        $transaksis = Transaksi::all();

        return view('pages.transactions', compact('transaksis'));
    }


    public function buat_transaksi(Request $request){
        $transaksi = new Transaksi();
        $transaksi->id_transaksi = $request->id_transaksi;
        $transaksi->tanggal_transaksi = date('Y-m-d H:i:s');
        $transaksi->nomor_nota = $request->nomor_nota;
        $transaksi->status_transaksi = $request->status_transaksi;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();

    return redirect('/transactions')->with('success', 'Transaksi berhasil dibuat');
    }

    public function lihat_transaksi($id){
        $transaksi = Transaksi::find($id);
        return view('pages.transactions', compact('transaksi'));
    }

    public function hapus_transaksi($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect('/transactions')->with('success', 'Transaksi berhasil dihapus');
    }

}
