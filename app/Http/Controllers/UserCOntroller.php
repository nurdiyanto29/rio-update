<?php

namespace App\Http\Controllers;

use App\Models\User;
Use Illuminate\Http\Request;

class UserCOntroller extends Controller
{
    public function index()
    {
        $data = User::orderBy('id','desc')->where('role','!=','Pemilik')->get();
        return view('user.index', compact('data'));
    }
    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->password = bcrypt('password');
        $data->save();
        return redirect()->back()->with(['t' =>  'success', 'm'=> 'Data berhasil ditambah']);;
    }
 
    public function update(Request $request)
    {
        $data =User::where('id', $request->get('id'))
        ->update([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'role'=>$request->get('role'),
        ]);
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil diupdate']);
    }
    public function destroy(Request $request)
    {
        $data =User::findorFail($request->id);
        $data->delete();
        return redirect()->back()
        ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
    }
}
