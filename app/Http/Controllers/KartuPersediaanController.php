<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\ReturBeli;
use App\Models\ReturJual;
use App\Models\Barang;
use App\Models\BarangGudang;
use App\Models\BarangToko;
use Illuminate\Support\Facades\DB;
use PDF;

class KartuPersediaanController extends Controller
{

    function kartu()
    {

        $barangId = request('_idd'); // ID barang yang diinginkan

        if(!$barangId) abort(404);

        $barang = Barang::find($barangId);
        $barangMasuk = DB::table('barang_masuk')
            ->select(DB::raw("(created_at) as created_at"), 'harga_satuan')
            ->where('barang_id', $barangId)
            ->get();

        $barangKeluar = DB::table('barang_keluar')
            ->select(DB::raw("(created_at) as created_at"), 'harga_satuan')
            ->where('barang_id', $barangId)
            ->get();

        $returBeli = DB::table('retur_beli')
            ->select(DB::raw("(created_at) as created_at"), 'harga_satuan')
            ->where('barang_id', $barangId)
            ->get();

        $returJual = DB::table('retur_jual')
            ->select(DB::raw("(created_at) as created_at"), 'harga_satuan')
            ->where('barang_id', $barangId)
            ->get();

        $saldo = DB::table('barang_masuk')
            ->select(DB::raw("(created_at) as created_at"), DB::raw('SUM(jumlah) as jumlah_masuk'), DB::raw('0 as jumlah_keluar'),  DB::raw('SUM(harga_total) as total_masuk'), 'harga_satuan', DB::raw('0 as jumlah_rb'), DB::raw('0 as jumlah_rj'))
            ->where('barang_id', $barangId)
            ->groupBy(DB::raw("(created_at)"), 'harga_satuan')
            ->orderBy(DB::raw("(created_at)"))
            ->get();

        $saldo = $saldo->merge(DB::table('barang_keluar')
            ->select(DB::raw("(created_at) as created_at"), DB::raw('0 as jumlah_masuk'), DB::raw('SUM(jumlah) as jumlah_keluar'),  DB::raw('SUM(harga_total) as total_keluar'), 'harga_satuan',  DB::raw('0 as jumlah_rb'), DB::raw('0 as jumlah_rj'))
            ->where('barang_id', $barangId)
            ->groupBy(DB::raw("(created_at)"), 'harga_satuan')
            ->orderBy(DB::raw("(created_at)"))
            ->get());

        $saldo = $saldo->merge(DB::table('retur_beli')
            ->select(DB::raw("(created_at) as created_at"), DB::raw('0 as jumlah_masuk'), DB::raw('0 as jumlah_keluar'),  DB::raw('SUM(harga_total) as total_rb'), 'harga_satuan',  DB::raw('SUM(jumlah) as jumlah_rb'), DB::raw('0 as jumlah_rj'))
            ->where('barang_id', $barangId)
            ->groupBy(DB::raw("(created_at)"), 'harga_satuan')
            ->orderBy(DB::raw("(created_at)"))
            ->get());
        $saldo = $saldo->merge(DB::table('retur_jual')
            ->select(DB::raw("(created_at) as created_at"), DB::raw('0 as jumlah_masuk'), DB::raw('0 as jumlah_keluar'),  DB::raw('SUM(harga_total) as total_rj'), 'harga_satuan',  DB::raw('0 as jumlah_rb'), DB::raw('SUM(jumlah) as jumlah_rj'))
            ->where('barang_id', $barangId)
            ->groupBy(DB::raw("(created_at)"), 'harga_satuan')
            ->orderBy(DB::raw("(created_at)"))
            ->get());

        $saldo = $saldo->sortBy('created_at')
            ->groupBy('created_at')
            ->map(function ($item) use ($barangMasuk, $barangKeluar, $returBeli, $returJual) {
                $jumlahMasuk = $item->sum('jumlah_masuk');
                $jumlahKeluar = $item->sum('jumlah_keluar');
                $jumlahRb = $item->sum('jumlah_rb');
                $jumlahRj = $item->sum('jumlah_rj');

                $totalMasuk = $item->sum('total_masuk');
                $totalKeluar = $item->sum('total_keluar');
                $totalRb = $item->sum('total_rb');
                $totalRj = $item->sum('total_rj');

                $saldo_stok = $jumlahMasuk - $jumlahKeluar;
                $saldo_uang = $totalKeluar - $totalMasuk;

                // Ambil harga satuan masuk
                $hargaSatuanMasuk = $barangMasuk->where('created_at', $item->first()->created_at)->pluck('harga_satuan')->first();

                // Ambil harga satuan rb
                $hargaSatuanRb = $returBeli->where('created_at', $item->first()->created_at)->pluck('harga_satuan')->first();

                // Ambil harga satuan keluar
                $hargaSatuanKeluar = $barangKeluar->where('created_at', $item->first()->created_at)->pluck('harga_satuan')->first();

                // Ambil harga satuan rj
                $hargaSatuanRj = $returJual->where('created_at', $item->first()->created_at)->pluck('harga_satuan')->first();

                return [
                    'tanggal' => $item->first()->created_at,
                    'jumlah_masuk' => $jumlahMasuk,
                    'jumlah_keluar' => $jumlahKeluar,
                    'jumlah_rb' => $jumlahRb,
                    'jumlah_rj' => $jumlahRj,

                    'total_masuk' => $totalMasuk,
                    'total_keluar' => $totalKeluar,
                    'total_rb' => $totalRb,
                    'total_rj' => $totalRj,

                    'hs_keluar' => $hargaSatuanKeluar,
                    'hs_masuk' => $hargaSatuanMasuk,
                    'hs_rb' => $hargaSatuanRb,
                    'hs_rj' => $hargaSatuanRj,
                ];
            })
            ->values();

        $pdf = PDF::loadview('kartu_pdf', compact('saldo', 'barang'));
        return $pdf->stream('kartu.pdf');

        return view('kartu_pdf', compact('saldo'));
    }
}
