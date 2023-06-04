<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cabang;
use App\Models\Kurir;
use App\Models\pengiriman;
use App\Models\Layanan;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

    public function indexPemesanan()
    {
        $pemesanan = Pemesanan::all();
        if ($pemesanan->count() > 0){
            return response()->json([
                'status' => 200,
                'pemesanan' => $pemesanan
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'pemesanan' => 'No Records Found'
            ], 404);
        }
       
    }
    
    public function storePemesanan(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_produk_pemesanan' => 'required|string|max:255',
            'harga_produk_pemesanan' => 'required|integer|max:20',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required|string|max:255',
            'nama_customer' => 'required|string|max:255',
            'alamat_customer' => 'required|string|max:255',
            'telp_customer' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $pemesanan = Pemesanan::create([
                'nama_produk_pemesanan' => $request->nama_produk_pemesanan,
                'harga_produk_pemesanan' => $request->harga_produk_pemesanan,
                'tanggal_pemesanan' => $request->tanggal_pemesanan,
                'status_pemesanan' => $request->status_pemesanan,
                'nama_customer' => $request->nama_customer,
                'alamat_customer' => $request->alamat_customer,
                'telp_customer' => $request->telp_customer,
            ]);
            
            if ($pemesanan){
                return response()->json([
                    'status' => 200,
                    'messages' => 'Data berhasil di input',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function showPemesanan($id)
    {
        $pemesanan = Pemesanan::find($id);
        if ($pemesanan){
            return response()->json([
                'status' => 200,
                'messages' => $pemesanan,
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Data tidak ditemukan',
            ],404);
        }
    }

    public function editPemesanan(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_produk_pemesanan' => 'required|string|max:255',
            'harga_produk_pemesanan' => 'required|integer|max:20',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required|string|max:255',
            'nama_customer' => 'required|string|max:255',
            'alamat_customer' => 'required|string|max:255',
            'telp_customer' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            
            $pemesanan = Pemesanan::find($id);
            if ($pemesanan){
                $pemesanan -> update([
                    'nama_produk_pemesanan' => $request->nama_produk_pemesanan,
                    'harga_produk_pemesanan' => $request->harga_produk_pemesanan,
                    'tanggal_pemesanan' => $request->tanggal_pemesanan,
                    'status_pemesanan' => $request->status_pemesanan,
                    'nama_customer' => $request->nama_customer,
                    'alamat_customer' => $request->alamat_customer,
                    'telp_customer' => $request->telp_customer,
                ]);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Data berhasil di update',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function deletePemesanan($id)
    {
        $pemesanan = Pemesanan::find($id);
        if ($pemesanan){
            $pemesanan->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Data berhasil di delete',
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Tidak ada data yang ditemukan',
            ],404);
        }
    }
    
    public function indexCabang()
    {
        $cabang = Cabang::all();
        if ($cabang->count() > 0){
            return response()->json([
                'status' => 200,
                'cabang' => $cabang
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'cabang' => 'No Records Found'
            ], 404);
        }
       
    }
    
    public function storeCabang(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_cabang' => 'required|string|max:255',
            'alamat_cabang' => 'required|string|max:255',
            'telp_cabang' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $cabang = Cabang::create([
                'nama_cabang'=>$request->nama_cabang,
                'alamat_cabang'=>$request->alamat_cabang,
                'telp_cabang'=>$request->telp_cabang
            ]);
            
            if ($cabang){
                return response()->json([
                    'status' => 200,
                    'messages' => 'Cabang berhasil di input',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function showCabang($id)
    {
        $cabang = Cabang::find($id);
        if ($cabang){
            return response()->json([
                'status' => 200,
                'messages' => $cabang,
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Data tidak ditemukan',
            ],404);
        }
    }

    public function editCabang(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_cabang' => 'required|string|max:255',
            'alamat_cabang' => 'required|string|max:255',
            'telp_cabang' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            
            $cabang = Cabang::find($id);
            if ($cabang){
                $cabang -> update([
                    'nama_cabang'=>$request->nama_cabang,
                    'alamat_cabang'=>$request->alamat_cabang,
                    'telp_cabang'=>$request->telp_cabang
                ]);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Cabang berhasil di update',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function deleteCabang($id)
    {
        $cabang = Cabang::find($id);
        if ($cabang){
            $cabang->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Data berhasil di delete',
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Tidak ada data yang ditemukan',
            ],404);
        }
    }


    public function indexKurir()
    {
        $kurir = Kurir::all();
        if ($kurir->count() > 0){
            return response()->json([
                'status' => 200,
                'kurir' => $kurir
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'kurir' => 'No Records Found'
            ], 404);
        }
       
    }
    
    public function storeKurir(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_kurir' => 'required|string|max:255',
            'status_id' => 'required|integer|max:11',
            'layanan_id' => 'required|integer|max:11',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $kurir = Kurir::create([
                'nama_kurir'=>$request->nama_kurir,
                'status_id'=>$request->status_id,
                'layanan_id'=>$request->layanan_id
            ]);
            
            if ($kurir){
                return response()->json([
                    'status' => 200,
                    'messages' => 'Kurir berhasil di input',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function showKurir($id)
    {
        $kurir = Kurir::find($id);
        if ($kurir){
            return response()->json([
                'status' => 200,
                'messages' => $kurir,
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Data tidak ditemukan',
            ],404);
        }
    }

    public function editKurir(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_kurir' => 'required|string|max:255',
            'status_id' => 'required|integer|max:11',
            'layanan_id' => 'required|integer|max:11',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            
            $kurir = Kurir::find($id);
            if ($kurir){
                $kurir -> update([
                    'nama_kurir'=>$request->nama_kurir,
                    'status_id'=>$request->status_id,
                    'layanan_id'=>$request->layanan_id
                ]);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Kurir berhasil di update',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function deleteKurir($id)
    {
        $kurir = Kurir::find($id);
        if ($kurir){
            $kurir->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Data berhasil di delete',
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Tidak ada data yang ditemukan',
            ],404);
        }
    }

    public function indexStatus()
    {
        $status = pengiriman::all();
        if ($status->count() > 0){
            return response()->json([
                'status' => 200,
                'pengiriman' => $status
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'pengiriman' => 'No Records Found'
            ], 404);
        }
       
    }
    
    public function storeStatus(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'pemesanan_id' => 'required|integer|max:11',
            'cabang_id' => 'required|integer|max:11',
            'nama_barang' => 'required|string|max:255',
            'lokasi_barang' => 'required|string|max:255',
            'alamat_tujuan' => 'required|string|max:255',
            'status_pengiriman' => 'required|string|max:255',
            'tanggal_pengiriman' => 'required|date',
            'tanggal_penerimaan' => 'required|date',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $status = pengiriman::create([
                'pemesanan_id' => $request->pemesanan_id,
                'cabang_id' => $request->cabang_id,
                'nama_barang' => $request->nama_barang,
                'lokasi_barang' => $request->lokasi_barang,
                'alamat_tujuan' => $request->alamat_tujuan,
                'status_pengiriman' => $request->status_pengiriman,
                'tanggal_pengiriman' => $request->tanggal_pengiriman,
                'tanggal_penerimaan' => $request->tanggal_penerimaan,
            ]);
            
            if ($status){
                return response()->json([
                    'status' => 200,
                    'messages' => 'Data berhasil di input',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function showStatus($id)
    {
        $status = pengiriman::find($id);
        if ($status){
            return response()->json([
                'status' => 200,
                'messages' => $status,
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Data tidak ditemukan',
            ],404);
        }
    }

    public function editStatus(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'pemesanan_id' => 'required|integer|max:11',
            'cabang_id' => 'required|integer|max:11',
            'nama_barang' => 'required|string|max:255',
            'lokasi_barang' => 'required|string|max:255',
            'alamat_tujuan' => 'required|string|max:255',
            'status_pengiriman' => 'required|string|max:255',
            'tanggal_pengiriman' => 'required|date',
            'tanggal_penerimaan' => 'required|date',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            
            $status = pengiriman::find($id);
            if ($status){
                $status -> update([
                    'pemesanan_id' => $request->pemesanan_id,
                    'cabang_id' => $request->cabang_id,
                    'nama_barang' => $request->nama_barang,
                    'lokasi_barang' => $request->lokasi_barang,
                    'alamat_tujuan' => $request->alamat_tujuan,
                    'status_pengiriman' => $request->status_pengiriman,
                    'tanggal_pengiriman' => $request->tanggal_pengiriman,
                    'tanggal_penerimaan' => $request->tanggal_penerimaan,
                ]);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Data berhasil di update',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function deleteStatus($id)
    {
        $status = pengiriman::find($id);
        if ($status){
            $status->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Data berhasil di delete',
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Tidak ada data yang ditemukan',
            ],404);
        }
    }

    public function indexLayanan()
    {
        $layanan = Layanan::all();
        if ($layanan->count() > 0){
            return response()->json([
                'status' => 200,
                'layanan' => $layanan
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'layanan' => 'No Records Found'
            ], 404);
        }
       
    }
    
    public function storeLayanan(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_layanan' => 'required|string|max:255',
            'berat_barang' => 'required|numeric',
            'asal_pengiriman' => 'required|string|max:255',
            'tujuan_pengiriman' => 'required|string|max:255',
            'jarak_pengiriman' => 'required|integer|max:11',
            'asuransi_pengiriman' => 'required|string|max:255',
            'biaya_ongkir' => 'required|integer',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $layanan = Layanan::create([
                'nama_layanan' => $request->nama_layanan,
                'berat_barang' => $request->berat_barang,
                'asal_pengiriman' => $request->asal_pengiriman,
                'tujuan_pengiriman' => $request->tujuan_pengiriman,
                'jarak_pengiriman' => $request->jarak_pengiriman,
                'asuransi_pengiriman' => $request->asuransi_pengiriman,
                'biaya_ongkir' => $request->biaya_ongkir,
            ]);
            
            if ($layanan){
                return response()->json([
                    'status' => 200,
                    'messages' => 'Data berhasil di input',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function showLayanan($id)
    {
        $layanan = Layanan::find($id);
        if ($layanan){
            return response()->json([
                'status' => 200,
                'messages' => $layanan,
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Data tidak ditemukan',
            ],404);
        }
    }

    public function editLayanan(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_layanan' => 'required|string|max:255',
            'berat_barang' => 'required|numeric',
            'asal_pengiriman' => 'required|string|max:255',
            'tujuan_pengiriman' => 'required|string|max:255',
            'jarak_pengiriman' => 'required|integer|max:11',
            'asuransi_pengiriman' => 'required|string|max:255',
            'biaya_ongkir' => 'required|integer',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            
            $layanan = Layanan::find($id);
            if ($layanan){
                $layanan -> update([
                    'nama_layanan' => $request->nama_layanan,
                    'berat_barang' => $request->berat_barang,
                    'asal_pengiriman' => $request->asal_pengiriman,
                    'tujuan_pengiriman' => $request->tujuan_pengiriman,
                    'jarak_pengiriman' => $request->jarak_pengiriman,
                    'asuransi_pengiriman' => $request->asuransi_pengiriman,
                    'biaya_ongkir' => $request->biaya_ongkir,
                ]);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Data berhasil di update',
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'messages'=> 'Ada sesuatu yang error',
                ],500);
            }
        }
    }

    public function deleteLayanan($id)
    {
        $layanan = Layanan::find($id);
        if ($layanan){
            $layanan->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Data berhasil di delete',
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'messages'=> 'Tidak ada data yang ditemukan',
            ],404);
        }
    }
}
