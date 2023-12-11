<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangGudangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangTokoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KartuPersediaanController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SuppliyerController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\ReturBeliController;
use App\Http\Controllers\ReturJualController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserCOntroller;
use Barryvdh\DomPDF\PDF;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout.auth');


Route::get('/nota', function () {
    $pdf = PDF::loadview('nota');
    return $pdf->stream('laporan-pegawai.pdf');
});

Route::group(['middleware' => ['cekrole:Pegawai Toko,Pegawai Gudang,Pemilik']], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home.index');


    Route::get('/pdf', [KartuPersediaanController::class, 'pdf'])->name('kartu.index');

    
    Route::get('/kartu', [KartuPersediaanController::class, 'kartu'])->name('kartu.kartu');




    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::get('/barang/variasi/{id}', [BarangController::class, 'variasi'])->name('variasi.create');
    Route::get('/barang/edit/variasi/{id}', [BarangController::class, 'variasi'])->name('variasi.edit');
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::get('/barang/detail/{barang}', [BarangController::class, 'show'])->name('barang.detail');
    Route::POST('/barang/store', [BarangController::class, 'store'])->name('barang.store');
    Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::post('/barang/delete', [BarangController::class, 'destroy'])->name('barang.delete');


    Route::get('/barang-gudang', [BarangGudangController::class, 'index'])->name('barang-gudang.index');
    Route::get('/barang-gudang/create', [BarangGudangController::class, 'create'])->name('barang-gudang.create');
  
    Route::get('/barang-gudang/edit/{id}', [BarangGudangController::class, 'edit'])->name('barang-gudang.edit');
    Route::get('/barang-gudang/detail/{barang}', [BarangGudangController::class, 'show'])->name('barang-gudang.detail');
    Route::POST('/barang-gudang/store', [BarangGudangController::class, 'store'])->name('barang-gudang.store');
    Route::put('/barang-gudang/update/{id}', [BarangGudangController::class, 'update'])->name('barang-gudang.update');
    Route::post('/barang-gudang/delete', [BarangGudangController::class, 'destroy'])->name('barang-gudang.delete');

    Route::get('/barang-gudang/cetak-pdf', [BarangGudangController::class, 'pdf'])->name('barang-gudang.c');
    
    Route::get('/barang-transfer', [BarangGudangController::class, 'index'])->name('barang-transfer.index');
    Route::get('/barang-transfer/create', [BarangGudangController::class, 'create'])->name('barang-transfer.create');
  
    Route::get('/barang-transfer/edit/{id}', [BarangGudangController::class, 'edit'])->name('barang-transfer.edit');
    Route::get('/barang-transfer/detail/{barang}', [BarangGudangController::class, 'show'])->name('barang-transfer.detail');
    Route::POST('/barang-transfer/store', [BarangGudangController::class, 'store'])->name('barang-transfer.store');
    Route::put('/barang-transfer/update/{id}', [BarangGudangController::class, 'update'])->name('barang-transfer.update');
    Route::post('/barang-transfer/delete', [BarangGudangController::class, 'destroy'])->name('barang-transfer.delete');

    Route::get('/barang-toko', [BarangTokoController::class, 'index'])->name('barang-toko.index');
    Route::get('/barang-toko/create', [BarangTokoController::class, 'create'])->name('barang-toko.create');
  
    Route::get('/barang-toko/edit/{id}', [BarangTokoController::class, 'edit'])->name('barang-toko.edit');
    Route::get('/barang-toko/detail/{barang}', [BarangTokoController::class, 'show'])->name('barang-toko.detail');
    Route::POST('/barang-toko/store', [BarangTokoController::class, 'store'])->name('barang-toko.store');
    Route::put('/barang-toko/update/{id}', [BarangTokoController::class, 'update'])->name('barang-toko.update');
    Route::post('/barang-toko/delete', [BarangTokoController::class, 'destroy'])->name('barang-toko.delete');
    Route::get('/barang-toko/cetak-pdf', [BarangTokoController::class, 'pdf'])->name('barang-toko.c');

    Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
    Route::get('/penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');
    Route::get('/penjualan/variasi/{id}', [PenjualanController::class, 'variasi'])->name('penjualan-variasi.create');
    Route::get('/penjualan/edit/variasi/{id}', [PenjualanController::class, 'variasi'])->name('penjualan-variasi.edit');
    Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'edit'])->name('penjualan.edit');
    Route::get('/penjualan/detail/{penjualan}', [PenjualanController::class, 'show'])->name('penjualan.detail');
    Route::POST('/penjualan/store', [PenjualanController::class, 'store'])->name('penjualan.store');
    Route::put('/penjualan/update/{id}', [PenjualanController::class, 'update'])->name('penjualan.update');
    Route::post('/penjualan/delete', [PenjualanController::class, 'destroy'])->name('penjualan.delete');
    Route::get('/penjualan/nota/{key}', [PenjualanController::class, 'nota'])->name('penjualan.nota');

    Route::get('/penjualan/cetak', [PenjualanController::class, 'cetak_pdf'])->name('penjualan.cetak');
    Route::get('/penjualan/cek/{id}', [PenjualanController::class, 'cek'])->name('penjualan.cek');
    Route::get('/penjualan/cetak-pdf', [PenjualanController::class, 'pdf'])->name('penjualan.c');

    Route::get('/retur-jual', [ReturJualController::class, 'index'])->name('retur-jual.index');
    Route::get('/retur-jual/create', [ReturJualController::class, 'create'])->name('retur-jual.create');
    Route::get('/retur-jual/variasi/{id}', [ReturJualController::class, 'variasi'])->name('retur-jual-variasi.create');
    Route::get('/retur-jual/edit/variasi/{id}', [ReturJualController::class, 'variasi'])->name('retur-jual-variasi.edit');
    Route::get('/retur-jual/edit/{id}', [ReturJualController::class, 'edit'])->name('retur-jual.edit');
    Route::get('/retur-jual/detail/{retur-jual}', [ReturJualController::class, 'show'])->name('retur-jual.detail');
    Route::POST('/retur-jual/store', [ReturJualController::class, 'store'])->name('retur-jual.store');
    Route::put('/retur-jual/update/{id}', [ReturJualController::class, 'update'])->name('retur-jual.update');
    Route::post('/retur-jual/delete', [ReturJualController::class, 'destroy'])->name('retur-jual.delete');

    Route::get('/retur-jual/cetak', [ReturJualController::class, 'cetak_pdf'])->name('retur-jual.cetak');
    Route::get('/retur-jual/cek-barang/{id}', [ReturJualController::class, 'cek_barang'])->name('retur-jual.cek');
    Route::get('/retur-jual/cek/{id}', [ReturJualController::class, 'cek'])->name('retur-jual.cekb');
    Route::get('/retur-jual/cetak-pdf', [ReturJualController::class, 'pdf'])->name('retur-jual.c');

    Route::get('/retur-beli', [ReturBeliController::class, 'index'])->name('retur-beli.index');
    Route::get('/retur-beli/create', [ReturBeliController::class, 'create'])->name('retur-beli.create');
    Route::get('/retur-beli/variasi/{id}', [ReturBeliController::class, 'variasi'])->name('retur-beli-variasi.create');
    Route::get('/retur-beli/edit/variasi/{id}', [ReturBeliController::class, 'variasi'])->name('retur-beli-variasi.edit');
    Route::get('/retur-beli/edit/{id}', [ReturBeliController::class, 'edit'])->name('retur-beli.edit');
    Route::get('/retur-beli/detail/{retur-beli}', [ReturBeliController::class, 'show'])->name('retur-beli.detail');
    Route::POST('/retur-beli/store', [ReturBeliController::class, 'store'])->name('retur-beli.store');
    Route::put('/retur-beli/update/{id}', [ReturBeliController::class, 'update'])->name('retur-beli.update');
    Route::post('/retur-beli/delete', [ReturBeliController::class, 'destroy'])->name('retur-beli.delete');

    Route::get('/retur-beli/cetak', [ReturBeliController::class, 'cetak_pdf'])->name('retur-beli.cetak');
    Route::get('/retur-beli/cek-barang/{id}', [ReturBeliController::class, 'cek_barang'])->name('retur-beli.cek');
    Route::get('/retur-beli/cek/{id}', [ReturBeliController::class, 'cek'])->name('retur-beli.cekb');
    Route::get('/retur-beli/cetak-pdf', [ReturBeliController::class, 'pdf'])->name('retur-beli.c');


    Route::get('/penjualan/cetak', [PenjualanController::class, 'cetak_pdf'])->name('penjualan.cetak');
    Route::get('/penjualan/cek/{id}', [PenjualanController::class, 'cek'])->name('penjualan.cek');
    Route::get('/penjualan/cetak-pdf', [PenjualanController::class, 'pdf'])->name('penjualan.c');

    Route::get('/transfer', [TransferController::class, 'index'])->name('transfer.index');
    Route::get('/transfer/create', [TransferController::class, 'create'])->name('transfer.create');
    Route::get('/transfer/edit/{id}', [TransferController::class, 'edit'])->name('transfer.edit');
    Route::get('/transfer/detail/{transfer}', [TransferController::class, 'show'])->name('transfer.detail');
    Route::POST('/transfer/store', [TransferController::class, 'store'])->name('transfer.store');
    Route::put('/transfer/update/{id}', [TransferController::class, 'update'])->name('transfer.update');
    Route::post('/transfer/delete', [TransferController::class, 'destroy'])->name('transfer.delete');

    Route::get('/transfer/cetak', [TransferController::class, 'cetak_pdf'])->name('transfer.cetak');
    Route::get('/transfer/cek/{id}', [TransferController::class, 'cek'])->name('transfer.cek');
    Route::get('/transfer/cetak-pdf', [TransferController::class, 'pdf'])->name('transfer.c');

    Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
    Route::get('/pembelian/create', [PembelianController::class, 'create'])->name('pembelian.create');
    Route::get('/pembelian/variasi/{id}', [PembelianController::class, 'variasi'])->name('pembelian-variasi.create');
    Route::get('/pembelian/edit/variasi/{id}', [PembelianController::class, 'variasi'])->name('pembelian-variasi.edit');
    Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit'])->name('pembelian.edit');
    Route::get('/pembelian/detail/{pembelian}', [PembelianController::class, 'show'])->name('pembelian.detail');
    Route::POST('/pembelian/store', [PembelianController::class, 'store'])->name('pembelian.store');
    Route::put('/pembelian/update/{id}', [PembelianController::class, 'update'])->name('pembelian.update');
    Route::post('/pembelian/delete', [PembelianController::class, 'destroy'])->name('pembelian.delete');

    Route::get('/pembelian/cetak', [PembelianController::class, 'cetak_pdf'])->name('pembelian.cetak');
    Route::get('/pembelian/cek/{id}', [PembelianController::class, 'cek'])->name('pembelian.cek');
    Route::get('/pembelian/cetak-pdf', [PembelianController::class, 'pdf'])->name('pembelian.c');

    Route::get('/barang/masuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
    Route::POST('/barang/masuk/store', [BarangMasukController::class, 'store'])->name('barangmasuk.store');
    Route::PUT('/barang/masuk/update/{id}', [BarangMasukController::class, 'update'])->name('barangmasuk.update');
    Route::post('/barang/masuk/delete', [BarangMasukController::class, 'destroy'])->name('barangmasuk.delete');

    Route::get('/barang/keluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
    Route::POST('/barang/keluar/store', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');
    Route::PUT('/barang/keluar/update/{id}', [BarangKeluarController::class, 'update'])->name('barangkeluar.update');
    Route::post('/barang/keluar/delete', [BarangKeluarController::class, 'destroy'])->name('barangkeluar.delete');


    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/variasi/{kategori}', [KategoriController::class, 'set'])->name('set.variasi');
    Route::POST('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::PUT('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::post('/kategori/delete', [KategoriController::class, 'destroy'])->name('kategori.delete');

    Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
    Route::POST('/jenis/store', [JenisController::class, 'store'])->name('jenis.store');
    Route::PUT('/jenis/update/{id}', [JenisController::class, 'update'])->name('jenis.update');
    Route::post('/jenis/delete', [JenisController::class, 'destroy'])->name('jenis.delete');

    Route::get('/satuan', [SatuanController::class, 'index'])->name('satuan.index');
    Route::POST('/satuan/store', [SatuanController::class, 'store'])->name('satuan.store');
    Route::PUT('/satuan/update/{id}', [SatuanController::class, 'update'])->name('satuan.update');
    Route::post('/satuan/delete', [SatuanController::class, 'destroy'])->name('satuan.delete');

    Route::get('/suppliyer', [SuppliyerController::class, 'index'])->name('suppliyer.index');
    Route::POST('/suppliyer/store', [SuppliyerController::class, 'store'])->name('suppliyer.store');
    Route::PUT('/suppliyer/update/{id}', [SuppliyerController::class, 'update'])->name('suppliyer.update');
    Route::post('/suppliyer/delete', [SuppliyerController::class, 'destroy'])->name('suppliyer.delete');

    Route::get('/user', [UserCOntroller::class, 'index'])->name('user.index');
    Route::POST('/user/store', [UserCOntroller::class, 'store'])->name('user.store');
    Route::PUT('/user/update/{id}', [UserCOntroller::class, 'update'])->name('user.update');
    Route::post('/user/delete', [UserCOntroller::class, 'destroy'])->name('user.delete');


    Route::get('/profile', [AuthController::class, 'profile'])->name('user.profile');
    Route::post('/store/password', [AuthController::class, 'ubahpwstore'])->name('ubahpwstore');
});
