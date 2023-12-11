<?php

namespace App\Http\Controllers;

use App\Models\BarangGudang;
use Illuminate\Http\Request;
use PDF;


class BarangGudangController extends Controller
{
    public function index()
    {
        $data = BarangGudang::with('barang')->whereHas('barang', function ($query) {
            $query->where('status', 1);
        })->orderBy('id', 'desc')->get();
        return view('barang_gudang.index', compact('data'));
    }
    
    public function update(Request $req)
    {
        $data = BarangGudang::find($req->id);


        if( $data->barang->satuan->parent_id){
            $dt = [ 'harga_beli' => $req->harga/$data->barang->satuan->kelipatan];
        }else{
            $dt = [ 'harga_beli' => $req->harga];
        }
    
        $data->update($dt);  
        return redirect()->route('barang-gudang.index') ->with(['t' =>  'success', 'm'=> 'Data berhasil diupdate']);
    }
    public function pdf(Request $req)
    {
        $data = BarangGudang::whereHas('barang', function ($query) {
            $query->where('status', 1);
        })->get();
        $pdf = PDF::loadview('laporan_gudang_pdf', compact('data'));
        return $pdf->stream('laporan-gudang.pdf');
    }
  
}
