<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangToko;
use App\Models\Suppliyer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class PenjualanController extends Controller
{
    public function index()
    {
        $data = Penjualan::orderBy('id', 'desc')->get();
        // dd($data);
        return view('penjualan.index', compact('data'));
    }
    public function create()
    {
        $barang = BarangToko::orderBy('id', 'desc')->where('harga_jual','<>', NULL)->whereHas('barang', function ($query) {
            $query->where('status', 1);
        })->get();
        return view('penjualan.create', compact('barang'));
    }
    public function create_brg()
    {
        $barang = Barang::all();
        return view('penjualan.create', compact('barang', 'penjualan'));
    }
    public function store(Request $request)
    {
        $kode = $request->kode;
        // dd($kode);

        foreach ($kode as $k) {
            $k = explode("=", $k);
            // dd($k[1]);
            $brg = Barang::where('kode_barang', $k[0])->first();
            $bt = BarangToko::where('barang_id', $brg->id)->first();
            $bt->update([
                "stok" => $bt->stok - $k[1]
            ]);
        }



        $last_id = Penjualan::orderBY('id', 'DESC')->pluck('id')->first();
        $in = 'PJ-';
        $kd = $in . sprintf("%09s", $last_id + 1);
        $tr = new Penjualan;
        $tr->kode_transaksi = $kd;
        $tr->user_id = Auth::user()->id;
        $tr->tanggal = Carbon::now()->toDateTimeString();

        if ($tr->save()) {
            foreach ($kode as $k) {
                $k = explode("=", $k);
                $idd = Barang::where('kode_barang', $k[0])->pluck('id')->first();
                $keluar = new BarangKeluar;
                $keluar->barang_id = $idd;
                $keluar->jumlah = $k[1];
                $keluar->harga_total = $k[2];
                $keluar->harga_satuan = $k[2]/$k[1];
                $keluar->penjualan_id = $tr->id;
                $keluar->save();
            }
        }
        return redirect()->route('penjualan.nota', ['key' => $tr->id]);
        // dd($pdf);

    }

    public function cek($id)
    {
        echo json_encode(
            DB::table('barang as a')
                ->join('barang_toko as c', 'c.barang_id', 'a.id')
                ->join('satuan as b', 'b.id', 'a.satuan_id')
                ->where('a.kode_barang', $id)
                ->select(['a.*', 'b.nama as satuan', 'c.stok','c.harga_jual'])
                ->get()
        );
    }

    public function show(Penjualan $penjualan)
    {
        $data = BarangKeluar::where('penjualan_id', $penjualan->id)->get();
        return view('penjualan.detail', compact('data', 'penjualan'));
    }
    public function destroy(Request $request)
    {
        $data = Penjualan::findorFail($request->id);
        $data2 = BarangKeluar::where('id_penjualan',  $request->id);
        $data->delete();
        $data2->delete();
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

        if ($to != null) {
            $data = BarangKeluar::join('penjualan as a', 'a.id', '=', 'barang_keluar.penjualan_id')
                ->join('barang as b', 'b.id', '=', 'barang_keluar.barang_id')
                ->join('users as c', 'a.user_id', '=', 'c.id')
                ->whereBetween('a.tanggal', [$from, $to])
                ->orderBy('a.tanggal', 'ASC')
                ->get();

            $groupedData = $data->groupBy(function ($item) {
                return $item->penjualan->kode_transaksi; // Mengelompokkan berdasarkan kode transaksi penjualan
            })->toArray();

            $data = $groupedData;

            // dd($data);


            $pdf = PDF::loadview('laporan_penjualan_pdf', compact('data', 'to', 'from'));
            return $pdf->stream('laporan-pegawai.pdf');
        }
        $data = BarangKeluar::join('penjualan as a', 'a.id', '=', 'barang_keluar.penjualan_id')
            ->join('barang as b', 'b.id', '=', 'barang_keluar.barang_id')
            ->join('users as c', 'a.user_id', '=', 'c.id')
            ->whereBetween('a.tanggal', [$from, now()])
            ->orderBy('a.tanggal', 'ASC')
            ->get();

        $groupedData = $data->groupBy(function ($item) {
            return $item->penjualan->kode_transaksi; // Mengelompokkan berdasarkan kode transaksi penjualan
        })->toArray();

        $data = $groupedData;

        // dd($data);
        $pdf = PDF::loadview('laporan_penjualan_pdf', compact('data', 'to', 'from'));
        return $pdf->stream('laporan-pegawai.pdf');
    }
    public function nota($key)
    {
        $data = Penjualan::findOrFail($key);
        $bk = BarangKeluar::where('penjualan_id', $data->id)->get();
        // dd($bk);

        $pdf = PDF::setPaper('a6', 'landscape')->loadview('nota', compact('data', 'bk'));
        return $pdf->stream('nota.pdf');
    }
}
