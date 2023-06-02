<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ongkir extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_layanan',
        'berat_barang',
        'asal_pengiriman',
        'jarak_pengiriman',
        'metode_pengiriman',
        'asuransi_pengiriman',
        'biaya_ongker',

        
    ];
}
