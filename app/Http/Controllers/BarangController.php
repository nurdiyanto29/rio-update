<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangGudang;
use App\Models\BarangMasuk;
use App\Models\BarangToko;
use App\Models\Gambar;
use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Rak;
use App\Models\Satuan;
use App\Models\Variasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DNS1D;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{

    public function index()
    {
        $data = Barang::orderBy('id', 'desc')->where('status', 1)->get();
        return view('barang.index', compact('data'));
    }



    public function create()
    {
        $data = [
            'jenis' => Jenis::orderBy('id', 'desc')->where('status', 1)->get(),
            'satuan' => Satuan::orderBy('id', 'desc')->where('status', 1)->get(),

        ];
        return view('barang.create', compact('data'));
    }


    public function store(Request $request)
    {

        // dd($_POST);

        $data = new Barang();
        $data->nama = $request->nama;
        $data->jenis_id = $request->jenis_id;
        $data->satuan_id = $request->satuan_id;
        $data->stok_awal = $request->stok_awal;
        $data->harga_satuan = $request->harga_satuan;
        $data->kadaluarsa = $request->kadaluarsa;

        if ($data->save()) {
            $bg = new BarangGudang();
            $bg->barang_id = $data->id;
            $bg->stok = 0;
            $bg->save();
        }

        if ($data->save()) {
            $bg = new BarangToko();
            $bg->barang_id = $data->id;
            $bg->harga_jual = $request->harga_satuan;
            $bg->stok = $request->stok_awal;
            $bg->save();
        }


        $nama = $data->nama;
        $id = $data->id;
        $in = 'AT-';
        $ven = strtoupper($nama);
        $sub_kalimat = substr($ven, 0, 2);
        $kode = $in . $sub_kalimat;
        $kd = $kode . sprintf("%03s", $id);

        Storage::disk('public')->put($kd . '.png', base64_decode(DNS1D::getBarcodePNG("$kd", "C39")));
        Barang::where('id', $data->id)
            ->update([
                'kode_barang' => $kd,
            ]);
        return redirect()->route('barang.index')
            ->with(['t' =>  'success', 'm' => 'Data berhasil ditambah']);
    }

    public function show(Barang $barang)
    {
        $data = Barang::find($barang->id);
        return view('barang.detail', compact('data'));
    }
    public function edit(Request $request, $id)
    {

        $data = [
            'jenis' => Jenis::orderBy('id', 'desc')->where('status', 1)->get(),
            'satuan' => Satuan::orderBy('id', 'desc')->where('status', 1)->get(),
            'barang' => Barang::findOrfail($id)

        ];
        return view('barang.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        // dd($_POST);
        $data = Barang::find($id);

        $updt = $data->update([
            'nama' => $request->get('nama'),
            'jenis_id' => $request->get('jenis_id'),
            'satuan_id' => $request->get('satuan_id'),
            'stok_awal' => $request->get('stok_awal'),
            'harga_satuan' => $request->get('harga_satuan'),
            'kadaluarsa' => $request->get('kadaluarsa'),
        ]);

        $kode_barang = $request->get('kode_barang');
        $filePath = "storage/{$kode_barang}.png";

        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $nama = $request->get('nama');
        $id = $id;
        $in = 'AT-';
        $ven = strtoupper($nama);
        $sub_kalimat = substr($ven, 0, 2);
        $kode = $in . $sub_kalimat;
        $kd = $kode . sprintf("%03s", $id);
        Storage::disk('public')->put($kd . '.png', base64_decode(DNS1D::getBarcodePNG("$kd", "C39")));
        Barang::where('id', $id)
            ->update([
                'kode_barang' => $kd,
            ]);
        $bt = BarangToko::where('barang_id', $id)->where('updated_at', $data->updated_at)->first();
        if ($bt) $bt->update(['harga_jual' => $data->harga_satuan]);

        return redirect()->route('barang.index')
            ->with(['t' =>  'success', 'm' => 'Data berhasil diupdate']);
    }

    public function destroy(Request $request)
    {
        $data = Barang::findorFail($request->id)->update(['status' => 0]);
        // if($data){
        //     if(file_exists("storage/" . $data->kode_barang . '.png')){
        //         unlink("storage/" . $data->kode_barang . '.png');
        //         $data->delete();
        //         return redirect()->route('barang.index')
        //         ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
        //     }
        //     $data->delete();
        //     return redirect()->route('barang.index')
        //     ->with(['t' =>  'success', 'm'=> 'Data berhasil dihapus']);
        // }
        return redirect()->route('barang.index')
            ->with(['t' =>  'success', 'm' => 'Data berhasil dihapus']);
    }
}
