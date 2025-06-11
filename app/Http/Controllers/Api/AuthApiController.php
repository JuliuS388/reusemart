<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pembeli;

class AuthApiController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'pembeli') {
                $pembeli = Pembeli::with('alamat')->where('id_user', $user->id_user)->first();

                if ($pembeli) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Login berhasil',
                        'user' => $user,
                        'pembeli' => $pembeli
                    ]);
                } else {
                    Auth::logout();
                    return response()->json([
                        'status' => false,
                        'message' => 'Data pembeli tidak ditemukan'
                    ], 404);
                }
            } else {
                Auth::logout();
                return response()->json([
                    'status' => false,
                    'message' => 'Role tidak diizinkan untuk login via aplikasi'
                ], 403);
            }
        }

        return response()->json([
            'status' => false,
            'message' => 'Email atau password salah'
        ], 401);
    }
}
