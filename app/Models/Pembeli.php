<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $primaryKey = 'id_pembeli';

    protected $fillable = [
        'id_user', 'nama_pembeli', 'email_pembeli', 'noTelp_pembeli', 'username_pembeli', 'poin'
    ];

    public function alamat()
    {
        return $this->hasOne(Alamat::class, 'id_pembeli', 'id_pembeli');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pembeli', 'id_pembeli');
    }

}