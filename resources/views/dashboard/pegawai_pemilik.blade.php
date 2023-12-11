<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard Pemilik</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1">
                            <a href="{{ route('barang.index') }}">
                                <i class="fas fa-box-open"></i>
                            </a>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Barang</span>
                            <span class="info-box-number">
                                {{ $barang ?? '' }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1" style="background: aqua">
                            <a href="{{ route('penjualan.index') }}"><i class="fas fa-shopping-cart"></i></a> </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Transaksi Pembelian</span>
                            <span class="info-box-number">{{ $pembelian ?? '' }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><a href="{{ route('penjualan.index') }}"> <i
                                    class="fas fa-list"></i></a></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Transaksi Penjualan</span>
                            <span class="info-box-number">{{ $transaksi ?? '' }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><a href=""><i
                                    class="fas fa-table"></i></a> </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Suppliyer</span>
                            <span class="info-box-number">{{ $suppliyer ?? '' }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>


            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-6">
                    <!-- MAP & BOX PANE -->

                    <!-- /.card -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Transaksi Penjualan Terbaru</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Kode Transaksi</th>
                                            <th>Jumlah Barang</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan->take(5) as $dt)
                                            <tr>
                                                <td><a
                                                        href="{{ route('penjualan.detail', $dt->id) }}">{{ $dt->kode_transaksi }}</a>
                                                </td>
                                                @php
                                                $jml = App\Models\BarangKeluar::where('penjualan_id', $dt->id)->sum('jumlah'); @endphp
                                                <td>{{ $jml }}</td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                        {{ tgl($dt->tanggal) }}</div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> --}}
                            <a href="{{ route('penjualan.index') }}"
                                class="btn btn-sm btn-secondary float-right">Selengkapnya >></a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <!-- MAP & BOX PANE -->

                    <!-- /.card -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Transaksi Pembelian Terbaru</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Kode Transaksi</th>
                                            <th>Jumlah Barang</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembelian_->take(5) as $dt)
                                            <tr>
                                                <td><a
                                                        href="{{ route('pembelian.detail', $dt->id) }}">{{ $dt->kode_transaksi }}</a>
                                                </td>
                                                @php
                                                $jml = App\Models\BarangMasuk::where('pembelian_id', $dt->id)->sum('jumlah'); @endphp
                                                <td>{{ $jml }}</td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                        {{ tgl($dt->tanggal) }}</div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> --}}
                            <a href="{{ route('pembelian.index') }}"
                                class="btn btn-sm btn-secondary float-right">Selengkapnya >></a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>