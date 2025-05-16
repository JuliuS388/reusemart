<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penitip;

class PenitipController extends Controller
{
    //

    public function create_edit_penitip(Request $request)
    {
        $penitip = null;
        if ($request->has('id')) {
            $penitip = Penitip::findOrFail($request->id);
        }
        return view('pages.create_edit_penitip', compact('penitip'));
    }

    public function get_all_penitip()
    {
        $penitips = Penitip::all();

        return view('pages.penitip', compact('penitips'));
    }

    public function tambah_penitip(Request $request)
    {
        $penitip = new Penitip();

        $penitip->nama_penitip = $request->nama_penitip;
        $penitip->noTelp_penitip = $request->noTelp_penitip;
        $penitip->email_penitip = $request->email_penitip;
        $penitip->saldo_penitip = $request->saldo_penitip;
        $penitip->poin_penitip = $request->poin_penitip;
        $penitip->rating_penitip = $request->rating_penitip;
        $penitip->username_penitip = $request->username_penitip;
        $penitip->password_penitip = $request->password_penitip;
        $penitip->save();

        return redirect('/penitip')->with('success', 'Penitip berhasil ditambahkan');
    }

    public function update_penitip(Request $request)
    {
        $penitip = Penitip::findOrFail($request->id_penitip);

        $penitip->nama_penitip = $request->nama_penitip;
        $penitip->noTelp_penitip = $request->noTelp_penitip;
        $penitip->email_penitip = $request->email_penitip;
        $penitip->saldo_penitip = $request->saldo_penitip;
        $penitip->poin_penitip = $request->poin_penitip;
        $penitip->rating_penitip = $request->rating_penitip;
        $penitip->save();

        return redirect('/penitip')->with('success', 'Penitip berhasil diupdate');
    }


    public function hapus_penitip($id)
    {
        $penitip = Penitip::find($id);
        $penitip->delete();

        return redirect('/penitip')->with('success', 'Penitip berhasil dihapus');
    }
}
