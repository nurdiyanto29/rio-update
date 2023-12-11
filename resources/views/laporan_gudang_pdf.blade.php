<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang Gudang</title>

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
                Laporan Barang Gudang {{ tgls(now()) }}
            </th>
        </tr>
    </table>
    <br>
    <table class="blueTable">
        <thead>
            <tr style="background-color:rgb(119, 10, 10); color:#ffffff;">
                <th width="5%">No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Stok Gudang</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($data))
                @php
                    $rowNumber = 1;
                    $j = 0;
                    $hj = 0;
                    $th = 0;
                @endphp
                @foreach ($data as $kodeTransaksi => $items)
                    <tr>
                        <td>{{$rowNumber++}}</td>
                        <td>{{ $items->barang->kode_barang ?? "" }}</td>
                        <td>{{ $items->barang->nama ?? "" }}</td>
                        <td>{{ $items->barang->jenis->nama ?? "" }}</td>
                        <td>{{ $items->stok }} {{ $items->satuan->child->nama ?? $items->barang->satuan->nama }}</td>
                        
                    </tr>
                    @php
                    @endphp
                @endforeach
            @endif
        </tbody>
    </table>
</body>

</html>
