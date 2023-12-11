<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu</title>

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
            <th style=" font-family: Arial, Helvetica, sans-serif">
                Kartu Persediaan Barang {{ $barang->nama }} - ({{ $barang->kode_barang }})
            </th>
        </tr>
    </table>
    <br>
    <table class="blueTable" style="width: 100%">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th colspan="3">Masuk</th>
                <th colspan="3">Keluar</th>
                <th colspan="3">Balance</th>
            </tr>
            <tr>
                <th>Tanggal Waktu</th>
                <th>Keterangan</th>

                <th>Unit</th>
                <th>Harga/@</th>
                <th>Jumlah</th>

                <th>Unit</th>
                <th>Harga/@</th>
                <th>Jumlah</th>

                <th>Unit</th>
                <th>Harga/@</th>
                <th>Jumlah</th>


            </tr>
        </thead>
        <tbody>
            @php
                $unit = 0;
                $total = 0;
                $s_unit = $barang->stok_awal;
                $s_a = $barang->harga_satuan;
            @endphp
            <tr>
                <td>-</td>
                <td>Saldo Awal</td>
                <td></td>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $unit += $s_unit }}</td>
                @php
                    $total += $s_a * $unit;
                @endphp
                <td>@currency($s_a)</td>
                <td>@currency($total)</td>
            </tr>
            {{-- @dd($unit); --}}
            @foreach ($saldo as $item)
            @if ($item['jumlah_keluar'])
                    <tr>
                        <td>{{ tgl($item['tanggal']) }}</td>
                        <td>Penjualan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ $item['jumlah_keluar'] }}</td>
                        <td>@currency($item['hs_keluar'])</td>
                        <td>@currency($item['total_keluar'])</td>

                        <td>{{ $unit -= $item['jumlah_keluar'] }}</td>

                        
                        @php
                            // $total = $unit * $item['hs_keluar'];
                            $total = $total-$item['total_keluar']
                        @endphp
                        {{-- @dd($total) --}}
                        @if ($unit)
                            <td>@currency($total / $unit)</td>
                        @else
                            <td>0</td>
                        @endif
                        <td>@currency($total)</td>
                    </tr>
                @endif
                @if ($item['jumlah_masuk'])
                    <tr>
                        <td>{{ tgl($item['tanggal']) }}</td>
                        <td>Pembelian</td>
                        <td>{{ $item['jumlah_masuk'] }}</td>

                        <td>@currency($item['hs_masuk'])</td>
                        <td>@currency($item['total_masuk'])</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ $unit += $item['jumlah_masuk'] }}</td>
                        @php
                            $total += $item['total_masuk'];
                        @endphp
                        @if ($unit)
                            <td>@currency($total / $unit)</td>
                        @else
                            <td>0</td>
                        @endif
                        <td>@currency($total)</td>
                    </tr>
                @endif
                
                @if ($item['jumlah_rj'])
                    <tr>
                        <td>{{ tgl($item['tanggal']) }}</td>
                        <td>Retur Penjualan</td>
                        <td>{{ $item['jumlah_rj'] }}</td>
                        <td>@currency($item['hs_rj'])</td>
                        <td>@currency($item['total_rj'])</td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>{{ $unit += $item['jumlah_rj'] }}</td>
                        @php
                         $total = $total+$item['total_rj']
                            // $total = $unit * $item['hs_rj'];
                        @endphp
                        @if ($unit)
                            <td>@currency($total / $unit)</td>
                        @else
                            <td>0</td>
                        @endif
                        <td>@currency($total)</td>
                    </tr>
                @endif
                @if ($item['jumlah_rb'])
                    <tr>
                        <td>{{ tgl($item['tanggal']) }}</td>
                        <td>Retur Pembelian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ $item['jumlah_rb'] }}</td>
                        <td>@currency($item['hs_rb'])</td>
                        <td>@currency($item['total_rb'])</td>

                        <td>{{ $unit -= $item['jumlah_rb'] }}</td>
                        @php
                            $total = $total - $item['total_rb'];
                        @endphp
                        @if ($unit)
                            <td>@currency($total / $unit)</td>
                        @else
                            <td>0</td>
                        @endif
                        <td>@currency($total)</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>


</body>

</html>
