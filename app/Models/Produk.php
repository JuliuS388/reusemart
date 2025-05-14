<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //

    protected $table = 'produk';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'status',
        'harga',
        'kategori'
    ];

    protected $casts = [
        'daftar_produk' => 'array', // Assuming daftar_produk is a JSON colum
    ];
}
