<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cabang;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

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
}
