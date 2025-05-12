<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id_barang'; // ✅ Set primary key yang benar

    public $incrementing = true; // Jika id_barang adalah auto increment
    protected $keyType = 'int';  // Jika id_barang bertipe integer

    protected $fillable = [
        'foto_thumbnail',
        'foto1_barang',
        'foto2_barang',
        'kode_produk',
        'nama_barang',
        'tanggal_masuk',
        'perpanjangan',
        'harga_barang',
        'status_barang',
        'id_kategori',
        'id_penitip',
    ];
}
