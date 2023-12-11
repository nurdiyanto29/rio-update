<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangGudang;
use App\Models\BarangMasuk;
use App\Models\Satuan;
use App\Models\Suppliyer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class PembelianController extends Controller
{
    public function index()
    {
        $data = Pembelian::orderBy('id', 'desc')->get();
        // dd($data);
        return view('pembelian.index', compact('data'));
    }
    public function create()
    {
        $barang = BarangGudang::orderBy('id', 'desc')->whereHas('barang', function ($query) {
            $query->where('status', 1);
        })->get();
        $suppliyer = Suppliyer::orderBy('id','desc')->where('status',1)->get();
        $satuan = Satuan::orderBy('id','desc')->where('status',1)->get();
        return view('pembelian.create', compact('barang', 'suppliyer', 'satuan'));
    }

    public function store(Request $request)
    {

        $kode = $request->kode;

        // dd($kode);

        $last_id = Pembelian::orderBY('id', 'DESC')->pluck('id')->first();
        $in = 'BL-';
        $kd = $in . sprintf("%09s", $last_id + 1);
        $tr = new Pembelian;
        $tr->kode_transaksi = $kd;
        $tr->user_id = Auth::user()->id;
        $tr->suppliyer_id = $request->suppliyer_id;
        $tr->tanggal = Carbon::now()->toDateTimeString();


        if ($tr->save()) {

            foreach ($kode as $k) {



                $k = explode("=", $k);
                // dd($k[5]);
                $idd = Barang::where('kode_barang', $k[0])->first();
                // dd($idd);

              

                $satuan = Satuan::find($idd->satuan_id);
                if ($satuan->parent_id) {
                    $harga_satuan = $k[2] / $satuan->kelipatan;
                    $jumlah = $k[1] * $satuan->kelipatan;
                } else {
                    $harga_satuan = $k[2];
                    $jumlah = $k[1];
                }

                $masuk = new BarangMasuk;
                $masuk->barang_id = $idd->id;
                $masuk->jumlah = $jumlah;
                $masuk->pembelian_id = $tr->id;
                $masuk->harga_satuan = $harga_satuan;
                $masuk->satuan_id = $k[3];
                $masuk->harga_total = $k[4];
                $masuk->save();

                $bg = BarangGudang::where('barang_id', $idd->id)->first();
                $bg->update([
                    "stok" => $bg->stok + $k[1],
                    "satuan_id" => $k[3],
                    "harga_beli" => (int)$k[2]
                ]);

                $brg = $idd;

                if($k[5] && $k[5] < $brg->kadaluarsa )  $brg->update(['kadaluarsa' => $k[5]]);
               
            }
        }

        return redirect()->route('pembelian.index');
    }

    public function cek($id)
    {
        echo json_encode(
            DB::table('barang as a')
                ->join('satuan as b', 'b.id', 'a.satuan_id')
                ->join('barang_gudang as c', 'a.id', 'c.barang_id')
                ->where('a.kode_barang', $id)
                ->select(['a.*', 'b.nama as satuan', 'b.id as satuan_idd', 'c.harga_beli', 'b.kelipatan'])
                ->get()
        );
    }



    public function show(Pembelian $pembelian)
    {

        $data = BarangMasuk::where('pembelian_id', $pembelian->id)->get();
        return view('pembelian.detail', compact('data', 'pembelian'));
    }
    public function destroy(Request $request)
    {
        $data = Pembelian::findorFail($request->id);
        $data2 = BarangMasuk::where('pembelian_id',  $request->id);
        $data->delete();
        $data2->delete();
        return redirect()->back();
    }


    public function cetak_pdf()
    {
        $data = BarangMasuk::all();
        $pdf = PDF::loadview('laporan_penjualan_pdf', ['data' => $data]);
        return $pdf->stream('laporan-pegawai.pdf');
    }

    public function pdf(Request $req)
    {
        $from = $req->from . ' 00:00:00';
        $to = $req->to ? $req->to . ' 23:59:59' : '';

        if ($to != null) {
            $data = BarangMasuk::join('pembelian as a', 'a.id', '=', 'barang_masuk.pembelian_id')
                ->join('barang as b', 'b.id', '=', 'barang_masuk.barang_id')
                ->join('users as c', 'a.user_id', '=', 'c.id')
                ->whereBetween('a.tanggal', [$from, $to])
                ->orderBy('a.tanggal', 'ASC')
                ->select(['b.nama','b.satuan_id', 'a.tanggal', 'a.kode_transaksi', 'barang_masuk.jumlah', 'barang_masuk.harga_total', 'barang_masuk.harga_satuan', 'c.name'])
                ->get();


            $groupedData = $data->groupBy(function ($item) {
                return $item->kode_transaksi; // Mengelompokkan berdasarkan kode transaksi pembelian
            })->toArray();

            $data = $groupedData;


            $pdf = PDF::loadview('laporan_pembelian_pdf', compact('data', 'to', 'from'));
            return $pdf->stream('laporan-pegawai.pdf');
        }
        $data = BarangMasuk::join('pembelian as a', 'a.id', '=', 'barang_masuk.pembelian_id')
            ->join('barang as b', 'b.id', '=', 'barang_masuk.barang_id')
            ->join('users as c', 'a.user_id', '=', 'c.id')
            ->whereBetween('a.tanggal', [$from, now()])
            ->orderBy('a.tanggal', 'ASC')
            ->select(['b.nama','b.satuan_id', 'a.tanggal', 'a.kode_transaksi', 'barang_masuk.jumlah', 'barang_masuk.harga_total', 'barang_masuk.harga_satuan', 'c.name'])
            ->get();

        // dd($data);

        $groupedData = $data->groupBy(function ($item) {
            return $item->kode_transaksi; // Mengelompokkan berdasarkan kode transaksi pembelian
        })->toArray();

        $data = $groupedData;
        $pdf = PDF::loadview('laporan_pembelian_pdf', compact('data', 'to', 'from'));
        return $pdf->stream('laporan-pegawai.pdf');
    }
}
