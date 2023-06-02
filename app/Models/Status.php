<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pemesanan',
        'id_cabang',
        'nama_barang',
        'lokasi_barang',
        'alamat_tujuan',
        'status_pengiriman',
        'tanggal_pengiriman',
        'tanggal_penerimaan',

        
    ];
}
