<?php

namespace App\Http\Controllers;

use App\Models\Suppliyer;
use Illuminate\Http\Request;

class SuppliyerController extends Controller
{
    public function index()
    {
        $data = Suppliyer::orderBy('id','desc')->where('status',1)->get();
        return view('suppliyer.index', compact('data'));
    }
    public function store(Request $request)
    {
        $data = new Suppliyer();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->tlp = $request->tlp;
        $data->save();
        return redirect()->back()->with(['t' =>  'success', 'm'=> 'Data berhasil ditambah']);;
    }
 
    public function update(Request $request)
    {
        $data =Suppliyer::where('id', $request->get('id'))
        ->update([
            'nama'=>$request->get('nama'),
            'alamat'=>$request->get('alamat'),
            'tlp'=>$request->get('tlp'),
        ]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil diupdate']);
    }
    public function destroy(Request $request)
    {
        $data =Suppliyer::findorFail($request->id);
        $data->update(['status'=> 0]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
    }
}
