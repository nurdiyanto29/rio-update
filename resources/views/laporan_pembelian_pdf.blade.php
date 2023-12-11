<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pembelian Barang Toko</title>

    {{-- <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
</head>
<style>
    .custom-font {
        font-weight: bold;
    }


    table.blueTable {
        border: 1px solid #000000;
        background-color: #ffffff;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
    }

    table.blueTable td,
    table.blueTable th {
        border: 1px solid #020202;
        padding: 3px 2px;
        text-align: center
    }

    table thead tr th {
        font-size: 10px;
        /* font-weight: 100; */
        font-weight: normal;
        font-family: Arial, Helvetica, sans-serif;
    }

    table tbody tr td {
        font-size: 10px;
        /* font-weight: 100; */
        font-weight: normal;
        font-family: Arial, Helvetica, sans-serif;
    }

    table tfoot tr td {
        font-size: 10px;
        /* font-weight: 100; */
        font-weight: normal;
        font-family: Arial, Helvetica, sans-serif;
    }

    table tr th {
        padding: 0px;
    }

    .kop {
        font-size: 8px;
        text-align: right;
        /* font-weight: 100; */
        font-weight: normal;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>

    <table style="width: 100%">
        <tr>
            <th rowspan="5" style="text-align: left">
                <p>ADILA TANI <br>
                    GROUP</p>
            </th>
        </tr>
        <tr>
            <th class="kop">JL Palembang Jaya</th>
        <tr>
            <th class="kop">adilatani@gmail.com</th>
        </tr>
    </table>
    <br><br>
    <table style="width: 100%">
        <tr>
            @if ($to != null)
                <th style=" font-family: Arial, Helvetica, sans-serif">
                    Laporan Pembelian {{ Request::is('pembelian/cetak-pdf') ? tgls($from) . ' - ' . tgls($to) : '' }}
                </th>
            @else
                <th style=" font-family: Arial, Helvetica, sans-serif">
                    Laporan Pembelian
                    {{ Request::is('pembelian/cetak-pdf') ? 'Per Tanggal ' . tgls($from) . '- Sekarang (' . tgls(now()) . ' )' : '' }}
                </th>
            @endif
        </tr>
    </table>
    <br>
    <table class="blueTable">
        <thead>
            <tr style="background-color:rgb(119, 10, 10); color:#ffffff;">
                <th width="5%">No</th>
                <th>Kode transaksi</th>
                <th>Nama Barang</th>
                <th>Tanggal-Jam</th>
                <th>Jumlah</th>
                <th>Harga Beli</th>
                <th>Harga Total</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            @php
                $rowNumber = 1;
                $j = 0;
                $hb = 0;
                $t = 0;
            @endphp
            @if (!empty($data))
                @foreach ($data as $kodeTransaksi => $items)
                    @php
                        $rowCount = count($items);
                        $isFirstRow = true;
                        
                    @endphp
                    @if (is_array($items))
                        @foreach ($items as $index => $item)
                            <tr>
                                @if ($index === 0)
                                    <td rowspan="{{ $rowCount }}">{{ $rowNumber }}</td>
                                    <td rowspan="{{ $rowCount }}">{{ $kodeTransaksi }}</td>
                                    @php
                                        $rowNumber++;
                                    @endphp
                                @endif
                                @php
                                    $model = App\Models\Satuan::find($item['satuan_id'])
                                @endphp
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ tgl($item['tanggal']) }}</td>

                                @if ($model->parent_id)
                                <td>{{ $item['jumlah']/$model->kelipatan }} {{$model->nama}} atau {{ $item['jumlah']}} {{$model->parent->nama}} </td>
                                @else
                                <td>{{ $item['jumlah']/$model->kelipatan }} {{$model->nama}}</td>
                                    
                                @endif

                                <td> @currency($item['harga_satuan']*$model->kelipatan)</td>
                                <td> @currency($item['harga_total'])</td>
                                <td>{{ $item['name'] }}</td>
                            </tr>
                            @php
                                $j += $item['jumlah'];
                                $hb += $item['harga_satuan'];
                                $t += $item['harga_total'];
                            @endphp
                        @endforeach
                    @endif
                @endforeach
            @else
                <tr>
                    <td colspan="8">Tidak ada data yang tersedia.</td>
                </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td style="text-align: end" colspan="4">Total</td>
                <td></td>
                <td></td>
                <td>@currency($t)</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>
