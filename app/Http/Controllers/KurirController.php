<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurir;

class KurirController extends Controller
{
    public function index()
    {
        $kurir = Kurir::all();
        return view('kurir',compact('kurir'));
    }

    public function store(Request $request){
        $kurir = new Kurir();
        $kurir -> nama_cabang = $request->namaCabang;
        $kurir -> alamat_cabang = $request->alamatCabang;
        $kurir -> telp_cabang = $request->teleponCabang;
        $kurir->save();

        return redirect('/cabang');
    }

    public function edit(Request $request, $id)
    {
        $cabang = Kurir::find($id);
        $cabang -> nama_cabang = $request->namaCabang;
        $cabang -> alamat_cabang = $request->alamatCabang;
        $cabang -> telp_cabang = $request->teleponCabang;
        $cabang->save();
        return redirect('/cabang');
    }

    public function delete($id)
    {
        $cabang = Kurir::find($id);
        $cabang->delete();
        return redirect('/cabang');

    }
}
