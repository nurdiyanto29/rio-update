<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangGudang;
use App\Models\BarangToko;
use App\Models\BarangTransfer;
use App\Models\Suppliyer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Satuan;
use Illuminate\Support\Facades\DB;
use PDF;

class TransferController extends Controller
{
    public function index()
    {
        $data = Transfer::orderBy('id', 'desc')->get();
        return view('transfer.index', compact('data'));
    }
    public function create()
    {
        $barang = Barang::orderBy('id', 'desc')->where('status', 1)->get();
        $suppliyer = Suppliyer::get();
        return view('transfer.create', compact('barang','suppliyer'));
    }
    public function create_brg()
    {
        $barang = Barang::all();
        return view('transfer.create', compact('barang', 'transfer'));
    }
    public function store(Request $request)
    {

        $kode = $request->kode;
        // dd($kode);
        foreach ($kode as $k) {
            $k = explode("=", $k);
            $brg = Barang::where('kode_barang', $k[0])->first();

            $bg = BarangGudang::where('barang_id', $brg->id)->first();
            $bg->update([
                "stok" => $bg->stok - intval($k[1])
            ]);

            $satuan = Satuan::find($k[2]);
            $bt = BarangToko::where('barang_id', $brg->id)->first();
            $bt->update([
                "stok" => $bt->stok + intval($k[1]*$satuan->kelipatan)
            ]);
        }

        $last_id = Transfer::orderBY('id', 'DESC')->pluck('id')->first();
        $in = 'TF-';
        $kd = $in . sprintf("%09s", $last_id + 1);
        $tr = new Transfer;
        $tr->kode_transaksi = $kd;
        $tr->user_id = Auth::user()->id;
        $tr->tanggal = Carbon::now()->toDateTimeString();

        if ($tr->save()) {

            foreach ($kode as $k ) {
                $k = explode("=", $k);
                $idd = Barang::where('kode_barang', $k[0])->pluck('id')->first();
                $tf = new BarangTransfer();
                $tf->barang_id = $idd;
                $tf->jumlah = $k[1];
                $tf->transfer_id = $tr->id;
                $tf->save();
            }
        }

        return redirect()->route('transfer.index');
    }

    public function cek($id)
    {
        echo json_encode(
            DB::table('barang as a')
            ->join('barang_gudang as c', 'c.barang_id', 'a.id')
            ->join('satuan as b', 'b.id', 'c.satuan_id')
            ->where('a.kode_barang', $id)
            ->select(['a.*', 'b.nama as satuan','c.stok','b.id as satuan_idd' ])
            ->get()
        );
    }



    public function show(Transfer $transfer)
    {

        $data = BarangTransfer::where('transfer_id', $transfer->id)->get();
        return view('transfer.detail', compact('data', 'transfer'));
    }
    public function destroy(Request $request)
    {
        $data = Transfer::findorFail($request->id);
        $data2 = BarangTransfer::where('transfer_id',  $request->id);
        $data->delete();
        $data2->delete();
        return redirect()->back();
    }


    public function cetak_pdf()
    {
        $data = Transfer::all();
        $pdf = PDF::loadview('laporan_penjualan_pdf', ['data' => $data]);
        return $pdf->stream('laporan-pegawai.pdf');
    }

    public function pdf(Request $req)
    {
        $from = $req->from;
        $to = $req->to;

        if ($to != null) {
            $data = Transfer::join('penjualans as a', 'a.id', '=', 'barang_keluars.transfer_id')
                ->join('barangs as b', 'b.id', '=', 'barang_keluars.id_barang')
                ->join('users as c', 'a.id_user', '=', 'c.id')
                ->whereBetween('a.tanggal', [$from, $to])
                ->orderBy('a.tanggal', 'ASC')
                ->get();

            $pdf = PDF::loadview('laporan_penjualan_pdf', compact('data', 'to', 'from'));
            return $pdf->stream('laporan-pegawai.pdf');
        }
        $data = Transfer::join('penjualans as a', 'a.id', '=', 'barang_keluars.transfer_id')
            ->join('barangs as b', 'b.id', '=', 'barang_keluars.id_barang')
            ->join('users as c', 'a.id_user', '=', 'c.id')
            ->whereBetween('a.tanggal', [$from, $from])
            ->orderBy('a.tanggal', 'ASC')
            ->get();

        $pdf = PDF::loadview('laporan_penjualan_pdf', compact('data', 'to', 'from'));
        return $pdf->stream('laporan-pegawai.pdf');
    }
}
