<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengiriman;


class StatusController extends Controller
{
    public function index()
    {
        $status = pengiriman::all();
        return view('status',compact('status'));
    }
}
