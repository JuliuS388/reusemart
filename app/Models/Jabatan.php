<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan'; // nama tabel

    protected $primaryKey = 'id_jabatan'; // primary key

    protected $fillable = ['nama_jabatan']; // kolom yang bisa diisi

    public function pegawais()
    {
        return $this->hasMany(Pegawai::class, 'id_jabatan');
    }
}

