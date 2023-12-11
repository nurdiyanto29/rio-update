<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $data = Satuan::orderBy('id','desc')->where('status',1)->get();
        $satuan=Satuan::where(['kelipatan'=>1, 'status'=> 1])->get();
        // dd($satuan);
        return view('satuan.index', compact('data','satuan'));
    }
    public function store(Request $request)
    {
        $data = new Satuan();
        $data->nama = $request->nama;
        $data->kelipatan = $request->kelipatan ? : 1;
        $data->parent_id = $request->parent_id;
        $data->save();
        return redirect()->back()->with(['t' =>  'success', 'm'=> 'Data berhasil ditambah']);;
    }
 
    public function update(Request $request)
    {
        $data =Satuan::where('id', $request->get('id'))
        ->update([
            'nama'=>$request->get('nama'),
            'kelipatan'=>$request->get('kelipatan'),
            'parent_id'=>$request->get('parent_id'),
        ]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil diupdate']);
    }
    public function destroy(Request $request)
    {
        $data =Satuan::findorFail($request->id);
        $data->update(['status' => 0]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
    }
}
