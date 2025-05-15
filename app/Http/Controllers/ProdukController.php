<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    //

    public function create_edit_produk(Request $request){
        $produk = null;
        if ($request->has('id')) {
            $produk = Produk::findOrFail($request->id);
        }
        return view('pages.create_edit_produk', compact('produk'));
    }

    public function get_all_produk(){
        $produks = Produk::all();
        return view('pages.produk', compact('produks'));
    }

    public function get_detail_produk($id){
        $produk = Produk::find($id);
        return view('pages.detail_produk', compact('produk'));
    }

    public function create_produk(Request $request){
        $produk = new Produk();
        $produk->nama = $request->nama;
        $produk->status = $request->status;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->save();

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
    }

    public function update_produk(Request $request){
        $produk = Produk::findOrFail(id: $request->id);
        $produk->nama = $request->nama;
        $produk->status = $request->status;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;

        $produk->save();

        return redirect('/produk')->with('success', 'Produk berhasil diupdate');
    }


    public function hapus_produk($id){
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }
}
