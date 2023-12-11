<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangToko;
use App\Models\ReturJual;
use App\Models\Suppliyer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class ReturJualController extends Controller
{
    public function index()
    {
        $data = ReturJual::orderBy('id', 'desc')->get();
        return view('retur_jual.index', compact('data'));
    }
    public function create()
    {
        $penjualan = Penjualan::get();
        $barang = Barang::get();
        return view('retur_jual.create', compact('barang','penjualan'));
    }
    public function store(Request $request)
    {
        $kode = $request->kode;
        // dd($kode);
        foreach ($kode as $k) {
            $k = explode("=", $k);
            $pj= Penjualan::where('kode_transaksi', $k[0])->first();
            $bk = BarangKeluar::where('penjualan_id', $pj->id)->where('barang_id', $k[4])->first();
            $retur = new ReturJual();
                $retur->penjualan_id = $pj->id;
                $retur->barang_keluar_id = $k[1];
                $retur->jumlah = $k[2];
                $retur->harga_satuan = $bk->harga_satuan;
                $retur->harga_total = $bk->harga_satuan*$k[2];
                $retur->alasan = $k[3];
                $retur->barang_id = $k[4];
           
                $retur->user_id = Auth::user()->id;
                $retur->tanggal = Carbon::now()->toDateTimeString();;
                $retur->save();

                $bg = BarangToko::where('barang_id', $bk->barang_id)->first();
                $bg->update([
                    "stok" => $bg->stok + $k[2],
                ]);
        }
        return redirect()->route('retur-jual.index');
    }

    public function cek_barang($id)
    {
        echo json_encode(
            DB::table('penjualan as a')
            ->join('barang_keluar as b', 'b.penjualan_id', 'a.id')
            ->join('barang as c', 'b.barang_id', 'c.id')
            ->where('a.kode_transaksi', $id)
            ->select(['a.*','b.id as barang_id', 'b.jumlah', 'c.nama as nama_barang', 'c.kode_barang'])
            ->get()
        );
    }
    public function cek($id)
    {
        echo json_encode(
            DB::table('barang_keluar as b')
            ->join('barang as a', 'a.id', 'b.barang_id')
            ->where('b.id', $id)
            ->select(['b.*', 'a.nama'])
            ->get()
        );
    }



    public function destroy(Request $request)
    {
        $data = ReturJual::findorFail($request->id);
        $data->delete();
        return redirect()->back();
    }


    public function cetak_pdf()
    {
        $data = BarangKeluar::all();
        $pdf = PDF::loadview('laporan_penjualan_pdf', ['data' => $data]);
        return $pdf->stream('laporan-pegawai.pdf');
    }

    public function pdf(Request $req)
    {
        $from = $req->from . ' 00:00:00';
        $to = $req->to ? $req->to . ' 23:59:59' : '';

        $data = ReturJual::whereBetween('tanggal', [$from, $to ? : now()])->get();
        $pdf = PDF::loadview('laporan_rj_pdf', compact('data', 'from', 'to'));
        return $pdf->stream('laporan-toko.pdf');
    }
}
