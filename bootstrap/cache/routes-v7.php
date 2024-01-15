<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fea1b3bJh68IGb9d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nofMoRmc5kze82va',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::luwdu2nvXUCq12yi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2gkPt5tTh07HBu1H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nota' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5q1rmfM9ByrMOVAs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kartu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kartu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kartu.kartu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kartu/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kartu.indexx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-gudang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-gudang/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-gudang/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-gudang/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-gudang/cetak-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-transfer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-transfer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-transfer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-transfer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-transfer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-transfer/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-transfer.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-toko' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-toko/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-toko/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-toko/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang-toko/cetak-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penjualan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penjualan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penjualan/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penjualan/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penjualan/cetak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.cetak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/penjualan/cetak-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-jual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-jual/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-jual/detail/{retur-jual}' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-jual/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-jual/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-jual/cetak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.cetak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-jual/cetak-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-beli' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-beli/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-beli/detail/{retur-beli}' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-beli/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-beli/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-beli/cetak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.cetak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/retur-beli/cetak-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer/cetak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.cetak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfer/cetak-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pembelian' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pembelian/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pembelian/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pembelian/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pembelian/cetak' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.cetak',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pembelian/cetak-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/masuk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangmasuk.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/masuk/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangmasuk.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/masuk/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangmasuk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/keluar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangkeluar.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/keluar/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangkeluar.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barang/keluar/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangkeluar.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kategori' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kategori.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kategori/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kategori.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kategori/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kategori.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jenis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'jenis.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jenis/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'jenis.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/jenis/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'jenis.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/satuan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'satuan.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/satuan/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'satuan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/satuan/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'satuan.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliyer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliyer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliyer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliyer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliyer/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliyer.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ubahpwstore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/livewire/message/([^/]++)(*:33)|/([^/]++)/livewire/message/([^/]++)(*:75)|/livewire/preview\\-file/([^/]++)(*:114)|/barang(?|/(?|variasi/([^/]++)(*:152)|edit/(?|variasi/([^/]++)(*:184)|([^/]++)(*:200))|detail/([^/]++)(*:224)|update/([^/]++)(*:247)|masuk/update/([^/]++)(*:276)|keluar/update/([^/]++)(*:306))|\\-(?|gudang/(?|edit/([^/]++)(*:343)|detail/([^/]++)(*:366)|update/([^/]++)(*:389))|t(?|ransfer/(?|edit/([^/]++)(*:426)|detail/([^/]++)(*:449)|update/([^/]++)(*:472))|oko/(?|edit/([^/]++)(*:501)|detail/([^/]++)(*:524)|update/([^/]++)(*:547)))))|/pe(?|njualan/(?|variasi/([^/]++)(*:592)|edit/(?|variasi/([^/]++)(*:624)|([^/]++)(*:640))|detail/([^/]++)(*:664)|update/([^/]++)(*:687)|nota/([^/]++)(*:708)|cek/([^/]++)(*:728))|mbelian/(?|variasi/([^/]++)(*:764)|edit/(?|variasi/([^/]++)(*:796)|([^/]++)(*:812))|detail/([^/]++)(*:836)|update/([^/]++)(*:859)|cek/([^/]++)(*:879)))|/retur\\-(?|jual/(?|variasi/([^/]++)(*:924)|edit/(?|variasi/([^/]++)(*:956)|([^/]++)(*:972))|update/([^/]++)(*:996)|cek(?|\\-barang/([^/]++)(*:1027)|/([^/]++)(*:1045)))|beli/(?|variasi/([^/]++)(*:1080)|edit/(?|variasi/([^/]++)(*:1113)|([^/]++)(*:1130))|update/([^/]++)(*:1155)|cek(?|\\-barang/([^/]++)(*:1187)|/([^/]++)(*:1205))))|/transfer/(?|edit/([^/]++)(*:1243)|detail/([^/]++)(*:1267)|update/([^/]++)(*:1291)|cek/([^/]++)(*:1312))|/kategori/(?|variasi/([^/]++)(*:1351)|update/([^/]++)(*:1375))|/jenis/update/([^/]++)(*:1407)|/s(?|atuan/update/([^/]++)(*:1442)|uppliyer/update/([^/]++)(*:1475))|/user/update/([^/]++)(*:1506))/?$}sDu',
    ),
    3 => 
    array (
      33 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      75 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'variasi.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'variasi.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang.detail',
          ),
          1 => 
          array (
            0 => 'barang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangmasuk.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barangkeluar.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.detail',
          ),
          1 => 
          array (
            0 => 'barang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-gudang.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-transfer.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-transfer.detail',
          ),
          1 => 
          array (
            0 => 'barang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-transfer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.detail',
          ),
          1 => 
          array (
            0 => 'barang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'barang-toko.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan-variasi.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan-variasi.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.detail',
          ),
          1 => 
          array (
            0 => 'penjualan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.nota',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penjualan.cek',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      764 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian-variasi.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian-variasi.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.detail',
          ),
          1 => 
          array (
            0 => 'pembelian',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pembelian.cek',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual-variasi.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual-variasi.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.cek',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-jual.cekb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli-variasi.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli-variasi.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.cek',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'retur-beli.cekb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.detail',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.cek',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'set.variasi',
          ),
          1 => 
          array (
            0 => 'kategori',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kategori.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'jenis.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'satuan.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliyer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::Fea1b3bJh68IGb9d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::Fea1b3bJh68IGb9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nofMoRmc5kze82va' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::nofMoRmc5kze82va',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::luwdu2nvXUCq12yi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::luwdu2nvXUCq12yi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2gkPt5tTh07HBu1H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000034619d7e000000003639f559";}";s:4:"hash";s:44:"pM3mXWcmx5MoQS51gsqGWQHaXFTk281GTgdpvcJJxm8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2gkPt5tTh07HBu1H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@authenticate',
        'controller' => 'App\\Http\\Controllers\\AuthController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout.auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5q1rmfM9ByrMOVAs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nota',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:336:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:117:"function () {
    $pdf = \\Barryvdh\\DomPDF\\PDF::loadview(\'nota\');
    return $pdf->stream(\'laporan-pegawai.pdf\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000034619d79000000003639f559";}";s:4:"hash";s:44:"I6B6ifKAkro3ftsNgD6f3HE9NKpLKigVDVzqVk8mx/U=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5q1rmfM9ByrMOVAs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kartu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KartuPersediaanController@pdf',
        'controller' => 'App\\Http\\Controllers\\KartuPersediaanController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kartu.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kartu.kartu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kartu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KartuPersediaanController@kartu',
        'controller' => 'App\\Http\\Controllers\\KartuPersediaanController@kartu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kartu.kartu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kartu.indexx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kartu/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KartuPersediaanController@index',
        'controller' => 'App\\Http\\Controllers\\KartuPersediaanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kartu.indexx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@index',
        'controller' => 'App\\Http\\Controllers\\BarangController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@create',
        'controller' => 'App\\Http\\Controllers\\BarangController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variasi.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@variasi',
        'controller' => 'App\\Http\\Controllers\\BarangController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'variasi.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'variasi.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang/edit/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@variasi',
        'controller' => 'App\\Http\\Controllers\\BarangController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'variasi.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@edit',
        'controller' => 'App\\Http\\Controllers\\BarangController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang/detail/{barang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@show',
        'controller' => 'App\\Http\\Controllers\\BarangController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@store',
        'controller' => 'App\\Http\\Controllers\\BarangController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'barang/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@update',
        'controller' => 'App\\Http\\Controllers\\BarangController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangController@destroy',
        'controller' => 'App\\Http\\Controllers\\BarangController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-gudang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@index',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-gudang/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@create',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-gudang/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@edit',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-gudang/detail/{barang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@show',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang-gudang/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@store',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'barang-gudang/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@update',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang-gudang/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@destroy',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-gudang.c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-gudang/cetak-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@pdf',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-gudang.c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-transfer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@index',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-transfer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-transfer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-transfer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@create',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-transfer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-transfer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-transfer/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@edit',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-transfer.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-transfer.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-transfer/detail/{barang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@show',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-transfer.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-transfer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang-transfer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@store',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-transfer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-transfer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'barang-transfer/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@update',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-transfer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-transfer.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang-transfer/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangGudangController@destroy',
        'controller' => 'App\\Http\\Controllers\\BarangGudangController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-transfer.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-toko',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@index',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-toko/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@create',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-toko/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@edit',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-toko/detail/{barang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@show',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang-toko/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@store',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'barang-toko/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@update',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang-toko/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@destroy',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barang-toko.c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang-toko/cetak-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangTokoController@pdf',
        'controller' => 'App\\Http\\Controllers\\BarangTokoController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barang-toko.c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@index',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@create',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan-variasi.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@variasi',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan-variasi.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan-variasi.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/edit/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@variasi',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan-variasi.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@edit',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/detail/{penjualan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@show',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penjualan/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@store',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'penjualan/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@update',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'penjualan/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@destroy',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.nota' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/nota/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@nota',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@nota',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.nota',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.cetak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/cetak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@cetak_pdf',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@cetak_pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.cetak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.cek' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/cek/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@cek',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@cek',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.cek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penjualan.c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'penjualan/cetak-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PenjualanController@pdf',
        'controller' => 'App\\Http\\Controllers\\PenjualanController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penjualan.c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@index',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@create',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual-variasi.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@variasi',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual-variasi.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual-variasi.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/edit/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@variasi',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual-variasi.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@edit',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/detail/{retur-jual}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@show',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'retur-jual/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@store',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'retur-jual/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@update',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'retur-jual/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.cetak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/cetak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@cetak_pdf',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@cetak_pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.cetak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.cek' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/cek-barang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@cek_barang',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@cek_barang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.cek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.cekb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/cek/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@cek',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@cek',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.cekb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-jual.c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-jual/cetak-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturJualController@pdf',
        'controller' => 'App\\Http\\Controllers\\ReturJualController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-jual.c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@index',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@create',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli-variasi.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@variasi',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli-variasi.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli-variasi.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/edit/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@variasi',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli-variasi.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@edit',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/detail/{retur-beli}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@show',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'retur-beli/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@store',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'retur-beli/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@update',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'retur-beli/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.cetak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/cetak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@cetak_pdf',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@cetak_pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.cetak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.cek' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/cek-barang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@cek_barang',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@cek_barang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.cek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.cekb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/cek/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@cek',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@cek',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.cekb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'retur-beli.c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'retur-beli/cetak-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturBeliController@pdf',
        'controller' => 'App\\Http\\Controllers\\ReturBeliController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'retur-beli.c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@index',
        'controller' => 'App\\Http\\Controllers\\TransferController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@create',
        'controller' => 'App\\Http\\Controllers\\TransferController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@edit',
        'controller' => 'App\\Http\\Controllers\\TransferController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer/detail/{transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@show',
        'controller' => 'App\\Http\\Controllers\\TransferController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@store',
        'controller' => 'App\\Http\\Controllers\\TransferController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'transfer/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@update',
        'controller' => 'App\\Http\\Controllers\\TransferController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfer/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@destroy',
        'controller' => 'App\\Http\\Controllers\\TransferController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.cetak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer/cetak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@cetak_pdf',
        'controller' => 'App\\Http\\Controllers\\TransferController@cetak_pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.cetak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.cek' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer/cek/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@cek',
        'controller' => 'App\\Http\\Controllers\\TransferController@cek',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.cek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfer/cetak-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@pdf',
        'controller' => 'App\\Http\\Controllers\\TransferController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@index',
        'controller' => 'App\\Http\\Controllers\\PembelianController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@create',
        'controller' => 'App\\Http\\Controllers\\PembelianController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian-variasi.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@variasi',
        'controller' => 'App\\Http\\Controllers\\PembelianController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian-variasi.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian-variasi.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/edit/variasi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@variasi',
        'controller' => 'App\\Http\\Controllers\\PembelianController@variasi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian-variasi.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@edit',
        'controller' => 'App\\Http\\Controllers\\PembelianController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/detail/{pembelian}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@show',
        'controller' => 'App\\Http\\Controllers\\PembelianController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pembelian/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@store',
        'controller' => 'App\\Http\\Controllers\\PembelianController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'pembelian/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@update',
        'controller' => 'App\\Http\\Controllers\\PembelianController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pembelian/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@destroy',
        'controller' => 'App\\Http\\Controllers\\PembelianController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.cetak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/cetak',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@cetak_pdf',
        'controller' => 'App\\Http\\Controllers\\PembelianController@cetak_pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.cetak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.cek' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/cek/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@cek',
        'controller' => 'App\\Http\\Controllers\\PembelianController@cek',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.cek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pembelian.c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pembelian/cetak-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\PembelianController@pdf',
        'controller' => 'App\\Http\\Controllers\\PembelianController@pdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pembelian.c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangmasuk.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang/masuk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangMasukController@index',
        'controller' => 'App\\Http\\Controllers\\BarangMasukController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangmasuk.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangmasuk.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang/masuk/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangMasukController@store',
        'controller' => 'App\\Http\\Controllers\\BarangMasukController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangmasuk.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangmasuk.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'barang/masuk/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangMasukController@update',
        'controller' => 'App\\Http\\Controllers\\BarangMasukController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangmasuk.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangmasuk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang/masuk/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangMasukController@destroy',
        'controller' => 'App\\Http\\Controllers\\BarangMasukController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangmasuk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangkeluar.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barang/keluar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangKeluarController@index',
        'controller' => 'App\\Http\\Controllers\\BarangKeluarController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangkeluar.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangkeluar.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang/keluar/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangKeluarController@store',
        'controller' => 'App\\Http\\Controllers\\BarangKeluarController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangkeluar.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangkeluar.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'barang/keluar/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangKeluarController@update',
        'controller' => 'App\\Http\\Controllers\\BarangKeluarController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangkeluar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'barangkeluar.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'barang/keluar/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\BarangKeluarController@destroy',
        'controller' => 'App\\Http\\Controllers\\BarangKeluarController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'barangkeluar.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kategori.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kategori',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KategoriController@index',
        'controller' => 'App\\Http\\Controllers\\KategoriController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kategori.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'set.variasi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kategori/variasi/{kategori}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KategoriController@set',
        'controller' => 'App\\Http\\Controllers\\KategoriController@set',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'set.variasi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kategori.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'kategori/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KategoriController@store',
        'controller' => 'App\\Http\\Controllers\\KategoriController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kategori.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kategori.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'kategori/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KategoriController@update',
        'controller' => 'App\\Http\\Controllers\\KategoriController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kategori.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kategori.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'kategori/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\KategoriController@destroy',
        'controller' => 'App\\Http\\Controllers\\KategoriController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kategori.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'jenis.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'jenis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\JenisController@index',
        'controller' => 'App\\Http\\Controllers\\JenisController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'jenis.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'jenis.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'jenis/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\JenisController@store',
        'controller' => 'App\\Http\\Controllers\\JenisController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'jenis.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'jenis.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'jenis/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\JenisController@update',
        'controller' => 'App\\Http\\Controllers\\JenisController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'jenis.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'jenis.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'jenis/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\JenisController@destroy',
        'controller' => 'App\\Http\\Controllers\\JenisController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'jenis.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'satuan.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'satuan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SatuanController@index',
        'controller' => 'App\\Http\\Controllers\\SatuanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'satuan.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'satuan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'satuan/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SatuanController@store',
        'controller' => 'App\\Http\\Controllers\\SatuanController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'satuan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'satuan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'satuan/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SatuanController@update',
        'controller' => 'App\\Http\\Controllers\\SatuanController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'satuan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'satuan.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'satuan/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SatuanController@destroy',
        'controller' => 'App\\Http\\Controllers\\SatuanController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'satuan.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliyer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'suppliyer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SuppliyerController@index',
        'controller' => 'App\\Http\\Controllers\\SuppliyerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'suppliyer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliyer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliyer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SuppliyerController@store',
        'controller' => 'App\\Http\\Controllers\\SuppliyerController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'suppliyer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliyer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'suppliyer/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SuppliyerController@update',
        'controller' => 'App\\Http\\Controllers\\SuppliyerController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'suppliyer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliyer.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliyer/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\SuppliyerController@destroy',
        'controller' => 'App\\Http\\Controllers\\SuppliyerController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'suppliyer.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\UserCOntroller@index',
        'controller' => 'App\\Http\\Controllers\\UserCOntroller@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\UserCOntroller@store',
        'controller' => 'App\\Http\\Controllers\\UserCOntroller@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\UserCOntroller@update',
        'controller' => 'App\\Http\\Controllers\\UserCOntroller@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\UserCOntroller@destroy',
        'controller' => 'App\\Http\\Controllers\\UserCOntroller@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@profile',
        'controller' => 'App\\Http\\Controllers\\AuthController@profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ubahpwstore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cekrole:Pegawai Toko,Pegawai Gudang,Pemilik',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@ubahpwstore',
        'controller' => 'App\\Http\\Controllers\\AuthController@ubahpwstore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ubahpwstore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
