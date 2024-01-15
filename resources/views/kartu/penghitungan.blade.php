<table id="example1" class="table table-bordered table-striped">
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
            $total_a = 0;
            $s_unit = $barang->stok_awal;
            $s_a = $barang->harga_satuan;

            $hpp = 0;
            $hpp_r = 0;
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
                $total_a += $s_a * $unit;
                $total += $s_a * $unit;
            @endphp
            <td>@currency($s_a)</td>
            <td>@currency($total)</td>
        </tr>
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

                    <td> {{ $unit . ' - ' . $item['jumlah_keluar'] . ' = ' }} {{ $unit -= $item['jumlah_keluar'] }}</td>
                    @php

                        $xx = $total;
                        $total = $total - $item['total_keluar'];
                    @endphp
                    {{-- @dd($total) --}}
                    @if ($unit)
                        <td>{{ $total . '/' . $unit . ' = ' . $total / $unit }}</td>
                    @else
                        <td>0</td>
                    @endif
                    <td>{{ $xx . ' - ' . $item['total_keluar'] . ' = ' . $total }}</td>
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
                    {{-- <td>{{ $unit += $item['jumlah_masuk'] }}</td> --}}
                    <td> {{ $unit . ' + ' . $item['jumlah_masuk'] . ' = ' }} {{ $unit += $item['jumlah_masuk'] }}</td>

                    @php
                        $xx = $total;
                        $total += $item['total_masuk'];

                        $hpp += $item['total_masuk'];

                        $hpp
                    @endphp
                    @if ($unit)
                        {{-- <td>@currency($total / $unit)</td> --}}
                        <td>{{ $total . '/' . $unit . ' = ' . $total / $unit }}</td>

                    @else
                        <td>0</td>
                    @endif
                    {{-- <td>@currency($total)</td> --}}
                    <td>{{ $xx . ' + ' . $item['total_masuk'] . ' = ' . $total }}</td>

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

                    {{-- <td>{{ $unit += $item['jumlah_rj'] }}</td> --}}
                    <td> {{ $unit . ' + ' . $item['jumlah_rj'] . ' = ' }} {{ $unit += $item['jumlah_rj'] }}</td>

                    @php
                        $xx = $total;
                        $total = $total + $item['total_rj'];
                    @endphp

                    @if ($unit)
                        {{-- <td>@currency($total / $unit)</td> --}}
                        <td>{{ $total . '/' . $unit . ' = ' . $total / $unit }}</td>
                    @else
                        <td>0</td>
                    @endif
                    {{-- <td>@currency($total)</td> --}}
                    <td>{{ $xx . ' + ' . $item['total_rj'] . ' = ' . $total }}</td>

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

                    {{-- <td>{{ $unit -= $item['jumlah_rb'] }}</td> --}}
                    <td> {{ $unit . ' - ' . $item['jumlah_rb'] . ' = ' }} {{ $unit -= $item['jumlah_rb'] }}</td>

                    @php
                        $xx = $total;
                        $total = $total - $item['total_rb'];

                        $hpp_r += $item['total_rb'];

                    @endphp
                    @if ($unit)
                        {{-- <td>@currency($total / $unit)</td> --}}
                        <td>{{ $total . '/' . $unit . ' = ' . $total / $unit }}</td>

                    @else
                        <td>0</td>
                    @endif
                    {{-- <td>@currency($total)</td> --}}
                    <td>{{ $xx . ' - ' . $item['total_rb'] . ' = ' . $total }}</td>

                </tr>
            @endif
        @endforeach
    </tbody>
</table>

<div>
   <table>
    <tr>
        <td style="text-align: right"> <strong> Pembelian =</strong></td>
        <td>Jumlah Pembelian - Jumlah Retur Pembelian</td>
        {{-- <td>  {{$hpp}} xxx {{$hpp_r}}</td> --}}
    </tr>
    <tr>
        <td style="text-align:right">=</td>
        <td style="text-align: left"> 
            {{$hpp}} - {{$hpp_r}}
        </td>
    </tr>
    <tr>
        @php
            $hpp_total = $hpp - $hpp_r;
        @endphp
        <td style="text-align:right">=</td>
        <td style="text-align: left"> 
           {{$hpp_total}}
        </td>
    </tr>


    <tr>
        <td style="text-align: right"> <strong> HPP =</strong></td>
        <td>Persedian + Pembelian - Persediaan Akhir</td>
       
    </tr>

    <tr>
        <td style="text-align: right"> <strong>=</strong></td>
        <td style="text-align: left"> {{$total_a}} +  {{$hpp_total}} - {{$total}} </td>
    </tr>
    <tr>
        <td style="text-align: right"> <strong>=</strong></td>
        <td>{{$total_a+$hpp_total-$total}}</td>
    </tr>
   </table>
</div>
