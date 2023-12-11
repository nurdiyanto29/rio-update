<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;

class BarangTransController extends Controller
{
    public function index()
    {
        $data = BarangMasuk::orderBy('id', 'DESC')->get();
        $barang = Barang::orderBy('id', 'DESC')->get();
        return view('barangmasuk.index', compact('data','barang'));
    }

    public function store(Request $request)
    {
        $data = new BarangMasuk();
        $data->tanggal = $request->tanggal;
        $data->id_barang = $request->id_barang;
        $data->jumlah = $request->jumlah;
        $data->id_user = Auth::user()->id ;
        $data->save();

        $barang =   Barang::where('id', $request->id_barang)->first();
        $barang->update([
            "stok" => $barang->stok + $request->jumlah
        ]);
        return redirect()->route('barangmasuk.index')
        ->with(['t' =>  'success', 'm'=> 'Data berhasil ditambah']);
    }

    public function update(Request $request)
    {

        $idd = $request->id;//merequest id barang masuk 
        $id_brg_new  = $request->id_barang; //request id barang 


        $old = BarangMasuk::where('id', $idd)->first(); //variabel old mencari data barang masuk jika id = id barang masuk

        $id_brg_old = $old->id_barang; //id barang old mengambil id barang pada variabel old 
        $jumlah_old = $old->jumlah; //id jumlah old mengambil id jumlah pada variabel old 

        $id_ = Barang::where('id', $old->id_barang)->first();//variabel id mengambil model barang jika id = old id barang 


        $data = BarangMasuk::where('id', $request->get('id'))->first();
        $data->update([
            'id_barang' => $id_brg_new,
            'tanggal' => $request->get('tanggal'),
            'jumlah' => $request->get('jumlah'),
        ]);

        if ($id_brg_old == $id_brg_new) {
            $jml_new = $request->jumlah;
            $jml_old = $old->jumlah;

            $jml_final = $jml_new - $jml_old;

            $barang = Barang::where('id', $id_brg_new)->first();
            $barang->update([
                "stok" => $barang->stok + $jml_final
            ]);
        } else {
            $jml_new = $request->jumlah;
            $jml_old = $old->jumlah;
            $br = Barang::where('id', $id_brg_old)->first();
            $br->update([
                "stok" =>$br->stok- $jml_old
            ]);

            $barang = Barang::where('id', $id_brg_new)->first();
            $barang->update([
                "stok" => $barang->stok + $jml_new
            ]);
        }
        return redirect()->route('barangmasuk.index')
        ->with(['t' =>  'success', 'm'=> 'Data berhasil diupdate']);
    }
    public function destroy(Request $request)
    {
        $data = BarangMasuk::findorFail($request->id);
        $data->delete();

        return redirect()->route('barangmasuk.index')
        ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
    }
}
