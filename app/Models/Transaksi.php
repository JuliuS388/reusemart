<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pembeli;

class Transaksi extends Model
{
    //

    protected $table = "transaksi";

    protected $primaryKey = "id_transaksi";

    protected $fillable = [
        'status',
        'total_harga'
    ];

    public $timestamps = false;

    public function pembeli(){
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }

}
