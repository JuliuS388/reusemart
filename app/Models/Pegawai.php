<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai'; // nama tabel

    protected $primaryKey = 'id_pegawai'; // primary key

    protected $fillable = [
        'nama_pegawai',
        'id_jabatan',
        'email_pegawai',
        'username_pegawai',
        'password_pegawai'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }
}


