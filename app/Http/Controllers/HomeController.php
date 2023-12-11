<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Pembelian;
use App\Models\Penjualan;
use App\Models\Rak;
use App\Models\Suppliyer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::orderBy('id','DESC')->get();
        $brg = Barang::orderBy('id','DESC')->where('status', 1)->get();
        $kategori = Jenis::orderBy('id','DESC')->where('status', 1)->count();
        $barang = Barang::orderBy('id','DESC')->where('status', 1)->count();
        $suppliyer = Suppliyer::orderBy('id','DESC')->where('status', 1)->count();
        $transaksi = Penjualan::orderBy('id','DESC')->count();
        $pembelian = Pembelian::orderBy('id','DESC')->count();
        $pembelian_ = Pembelian::orderBy('id','DESC')->get();
        
        
        return view('dasboard', compact('penjualan', 'pembelian','suppliyer','barang','transaksi','brg','pembelian_' ));
    }

}
