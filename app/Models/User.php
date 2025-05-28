<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast kolom ke tipe data
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi ke Pegawai (1 User punya 1 Pegawai)
    public function pegawai()
    {
        return $this->hasOne(Pegawai::class, 'id_user');
    }


}
