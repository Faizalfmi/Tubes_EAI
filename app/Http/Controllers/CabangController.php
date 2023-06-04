<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabang;

class CabangController extends Controller
{
    public function index()
    {
        $cabang = Cabang::all();
        return view('cabang',compact('cabang'));
    }

    public function store(Request $request){
        $cabang = new Cabang();
        $cabang -> nama_cabang = $request->namaCabang;
        $cabang -> alamat_cabang = $request->alamatCabang;
        $cabang -> telp_cabang = $request->teleponCabang;
        $cabang->save();

        return redirect('/cabang');
    }

    public function edit(Request $request, $id)
    {
        $cabang = Cabang::find($id);
        $cabang -> nama_cabang = $request->namaCabang;
        $cabang -> alamat_cabang = $request->alamatCabang;
        $cabang -> telp_cabang = $request->teleponCabang;
        $cabang->save();
        return redirect('/cabang');
    }

    public function delete($id)
    {
        $cabang = Cabang::find($id);
        $cabang->delete();
        return redirect('/cabang');

    }


}
