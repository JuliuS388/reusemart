<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pembeli;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                switch ($user->role) {
                    case 'admin':
                        return redirect()->route('pegawai.index');
                    case 'owner':
                        return redirect()->route('request-donasi.index');
                    case 'gudang':
                        return redirect()->route('barang.index');
                    case 'pembeli':
                        $pembeli = Pembeli::with('alamat')->where('id_user', $user->id_user)->first();

                        if ($pembeli) {
                            session(['pembeli' => $pembeli]); // simpan ke session
                            return redirect()->route('home'); // arahkan ke halaman utama
                        } else {
                            Auth::logout();
                            return redirect()->route('login.form')->with('error', 'Data pembeli tidak ditemukan.');
                        }

                    default:
                        Auth::logout();
                        return redirect()->route('login.form')->with('error', 'Role tidak dikenali.');
                }
            }

            return back()->with('error', 'Email atau password salah.');
        }


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login.form')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('pembeli'); // Pastikan session pembeli dihapus
        return redirect()->route('login.form');
    }

}
