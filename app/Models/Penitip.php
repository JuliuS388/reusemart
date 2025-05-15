<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitip extends Model
{
    //

    use HasFactory;

    protected $table = 'penitip';
<<<<<<< HEAD


    protected $fillable = [
        'nama',
        'kontak',
=======
    protected $primaryKey = 'id_penitip';


    public $timestamps = false; 

    protected $fillable = [
        'nama_penitip',
        'noTelp_penitip',
        'email_penitip',
        'saldo_penitip',
        'poin_penitip',
        'rating_penitip',
>>>>>>> 6f55ef4 (Added Login and Register)
    ];
}
