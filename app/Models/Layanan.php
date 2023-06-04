<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_layanan',
        'berat_barang',
        'asal_pengiriman',
        'tujuan_pengiriman',
        'jarak_pengiriman',
        'asuransi_pengiriman',
        'biaya_ongkir',
    ];
}
