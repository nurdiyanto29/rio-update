<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Variasi;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::orderBy('id','desc')->get();
        return view('kategori.index', compact('data'));
    }
    public function store(Request $request)
    {
        $data = new Kategori();
        $data->nama_kategori = $request->nama_kategori;
        $data->pilihan_ukuran = $request->pilihan_ukuran;
        $data->save();
        $nama = $request['nama'];
        if($nama != null){
            $count = count($nama);
            for ($i = 0; $i < $count; $i++) {
                $bap = new Variasi([
                    'id_kategori' => $data->id,
                    'nama' => $nama[$i],
                ]);
                $bap->save();
            }
        }
        return redirect()->back()->with(['t' =>  'success', 'm'=> 'Data berhasil ditambah']);;
    }
    public function set(Kategori $kategori)
    {

        $data = Variasi::where('id_kategori', $kategori->id)->get();
        return view('kategori.set_variasi', compact('data', 'kategori'));

    }
    public function update(Request $request)
    {
        $data =Kategori::where('id', $request->get('id'))
        ->update([
            'nama_kategori'=>$request->get('nama_kategori'),
            'pilihan_ukuran'=>$request->get('pilihan_ukura'),
        ]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil diupdate']);
    }
    public function destroy(Request $request)
    {
        $data =Kategori::findorFail($request->id);
        $data->delete();
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
    }
}
