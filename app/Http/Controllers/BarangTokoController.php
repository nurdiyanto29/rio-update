<?php

namespace App\Http\Controllers;

use App\Models\BarangToko;
use Illuminate\Http\Request;
use PDF;

class BarangTokoController extends Controller
{
    public function index(Request $req)
    {
        $idd = $req->_idd;
        if ($idd) {
            $data = BarangToko::where('id', $idd)->whereHas('barang', function ($query) {
                $query->where('status', 1);
            })->orderBy('id', 'desc')->get();
          
            return view('barang_toko.index', compact('data'));
        }
        $data = BarangToko::whereHas('barang', function ($query) {
            $query->where('status', 1);
        })
        ->orderBy('id', 'desc')->get();
        // dd($data);
        return view('barang_toko.index', compact('data'));
    }

    public function update(Request $req)
    {
        $data = BarangToko::find($req->id);
        $data->update([
            'harga_jual' => $req->harga,
        ]);
        return redirect()->route('barang-toko.index')->with(['t' =>  'success', 'm' => 'Data berhasil diupdate']);
    }
    public function pdf(Request $req)
    {
        $data = BarangToko::whereHas('barang', function ($query) {
            $query->where('status', 1);
        })->get();
        $pdf = PDF::loadview('laporan_toko_pdf', compact('data'));
        return $pdf->stream('laporan-toko.pdf');
    }
}
