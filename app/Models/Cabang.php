<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama_cabang',
        'alamat_cabang',
        'telp_cabang'
    ];
}
