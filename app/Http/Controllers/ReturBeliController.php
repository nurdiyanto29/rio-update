<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\BarangToko;
use App\Models\ReturBeli;
use App\Models\Suppliyer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class ReturBeliController extends Controller
{
    public function index()
    {
        $data = ReturBeli::orderBy('id', 'desc')->get();
        foreach ($data as $d) {
            $d->barang;
        }
        return view('retur_beli.index', compact('data'));
    }
    public function create()
    {
        $pembelian = Pembelian::get();
        $barang = Barang::get();
        return view('retur_beli.create', compact('barang', 'pembelian'));
    }
    public function store(Request $request)
    {
        $kode = $request->kode;
        foreach ($kode as $k) {

            $k = explode("=", $k);
            $pj = Pembelian::where('kode_transaksi', $k[0])->first();
            $bm = BarangMasuk::where('pembelian_id', $pj->id)->where('barang_id', $k[4])->first();
            $retur = new ReturBeli();
            $retur->pembelian_id = $pj->id;
            $retur->barang_masuk_id = $k[1];
            $retur->jumlah = $k[2];
            $retur->harga_satuan = $bm->harga_satuan;
            $retur->harga_total = $bm->harga_satuan*$k[2];
            $retur->alasan = $k[3];
            $retur->barang_id = $k[4];

            $retur->user_id = Auth::user()->id;
            $retur->tanggal = Carbon::now()->toDateTimeString();;
            $retur->save();

            $toko = BarangToko::where('barang_id', $k[4])->first();
            $toko->update([
                'stok' => $toko->stok - $k[2]
            ]);
        }
        return redirect()->route('retur-beli.index');
    }

    public function cek_barang($id)
    {
        echo json_encode(
            DB::table('pembelian as a')
                ->join('barang_masuk as b', 'b.pembelian_id', 'a.id')
                ->join('barang as c', 'b.barang_id', 'c.id')
                ->join('satuan as d', 'd.id', 'c.satuan_id')
                ->where('a.kode_transaksi', $id)
                ->select(['a.*', 'b.id as barang_id', 'b.jumlah', 'd.kelipatan as kelipatan', 'c.nama as nama_barang', 'c.kode_barang'])
                ->get()
        );
    }
    public function cek($id)
    {
        echo json_encode(
            DB::table('barang_masuk as b')
                ->join('barang as a', 'a.id', 'b.barang_id')
                ->join('satuan as d', 'd.id', 'b.satuan_id')
                ->where('b.id', $id)
                ->select(['b.*', 'a.nama', 'd.kelipatan'])
                ->get()
        );
    }



    public function destroy(Request $request)
    {
        $data = ReturBeli::findorFail($request->id);
        $data->delete();
        return redirect()->back();
    }


    public function cetak_pdf()
    {

        $data = BarangKeluar::all();
        $pdf = PDF::loadview('laporan_pembelian_pdf', ['data' => $data]);
        return $pdf->stream('laporan-pegawai.pdf');
    }

    public function pdf(Request $req)
    {
        $from = $req->from . ' 00:00:00';
        $to = $req->to ? $req->to . ' 23:59:59' : '';

        $data = ReturBeli::whereBetween('tanggal', [$from, $to ?: now()])->get();
        $pdf = PDF::loadview('laporan_rb_pdf', compact('data', 'from', 'to'));
        return $pdf->stream('laporan-toko.pdf');
    }
}
