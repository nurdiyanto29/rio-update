<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $data = Jenis::orderBy('id','desc')->where('status',1)->get();
        return view('jenis.index', compact('data'));
    }
    public function store(Request $request)
    {
        $data = new Jenis();
        $data->nama = $request->nama;
        $data->kode = $request->kode;
        $data->save();
        return redirect()->back()->with(['t' =>  'success', 'm'=> 'Data berhasil ditambah']);;
    }
 
    public function update(Request $request)
    {
        $data =Jenis::where('id', $request->get('id'))
        ->update([
            'nama'=>$request->get('nama'),
            'kode'=>$request->get('kode'),
        ]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil diupdate']);
    }
    public function destroy(Request $request)
    {
        $data =Jenis::findorFail($request->id);
        $data->update(['status' => 0]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
    }
}
