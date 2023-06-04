<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'tanggal_pemesanan',
        'status_pemesanan',
        'nama_customer',
        'alamat_customer',
        'telp_customer',
    ];
}
