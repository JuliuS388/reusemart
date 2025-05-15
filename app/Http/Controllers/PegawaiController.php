<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::with('jabatan')->get(); 
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('pegawai.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'id_jabatan' => 'required|exists:jabatan,id_jabatan',
            'email_pegawai' => 'required|email',
            'username_pegawai' => 'required',
            'password_pegawai' => 'required',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $jabatans = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'id_jabatan' => 'required|exists:jabatan,id_jabatan',
            'email_pegawai' => 'required|email',
            'username_pegawai' => 'required',
            'password_pegawai' => 'required',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
