<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemesanan;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $date = date('Y-m-d H:i:s');

        $pemesanan = new Pemesanan();
        $pemesanan->nama_produk_pemesanan = 'Peralatan Makan';
        $pemesanan->harga_produk_pemesanan = 10000;
        $pemesanan->tanggal_pemesanan = $date;
        $pemesanan->status_pemesanan = 'pending';
        $pemesanan->nama_customer = 'Dudung';
        $pemesanan->alamat_customer = 'Jl Postman';
        $pemesanan->telp_customer = '0812312312';
        $pemesanan->save();

    }
}
