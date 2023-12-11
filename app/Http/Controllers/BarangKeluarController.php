<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $data = BarangKeluar::orderBy('id', 'DeSC')->get();
        return view('barangkeluar.index', compact('data'));
    }
    public function store(Request $request)
    {
        $data = new BarangKeluar();
        $data->id_barang = $request->id_barang;
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect()->back();
    }
}
