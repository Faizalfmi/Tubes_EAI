<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemesanan_id',
        'cabang_id',
        'nama_barang',
        'lokasi_barang',
        'alamat_tujuan',
        'status_pengiriman',
        'tanggal_pengiriman',
        'tanggal_penerimaan',
    ];
}
