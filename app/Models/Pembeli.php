<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    //
    protected $primary_key = "id_pembeli";

    protected $fillable = [
        'poin',
        'nama_pembeli',
        'email_pembeli',
        'noTelp_pembeli',
        'username_pembeli',
        'password_pembeli',
    ];

    public $timestamps = false;

    public function transaksi(){
        return $this->belongsTo(Transaksi::class,'id_pembeli');
    }
}
