<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penitip extends Model
{
    protected $table = 'penitip';
    protected $primaryKey = 'id_penitip';
    public $timestamps = false;

    protected $fillable = [
        'nama_penitip',
        'email_penitip',
        'noTelp_penitip',
        'saldo_penitip',
        'poin_penitip',
        'rating_penitip',
        'username_penitip',
        'password_penitip'
    ];
}
