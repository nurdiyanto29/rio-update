@extends('layout.master')

@section('title')
    Retur Jual
@endsection
@push('css')
    <style>
        .error {
            color: red;
            font-weight: 400px;
        }
    </style>
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endpush
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Retur Jual</h3>
                                <div class="form-group">
                                    @if (Auth::user()->role == 'Pegawai Toko')
                                        <button class="btn btn-primary btn-sm float-right"
                                            onclick="window.location='{{ url('retur-jual/create') }}'" type="button">
                                            <i class="fas fa-plus"></i> Tambah
                                        </button>
                                    @endif
                                    <div class="dropdown">
                                        <a href="#" data-toggle="modal" data-target="#pdf">
                                            <button style="margin-right: 20px" class="btn btn-success btn-sm float-right"
                                                type="button">
                                                Cetak Laporan
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th style="width: 20px">No</th>
                                            <th style="width: 100px">Kode Penjualan</th>
                                            <th>Nama Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Alasan</th>
                                            <th>Jumlah Kembali</th>
                                            <th>User</th>
                                            <th>Tanggal</th>
                                            @if (Auth::user()->role == 'Pegawai Toko')
                                                <th><i class="fas fa-cogs"></i></th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $x = 1;
                                        @endphp
                                        @foreach ($data as $dt)
                                            <tr>
                                                <td>{{ $x++ }}</td>
                                                <td>{{ $dt->penjualan->kode_transaksi ?? '' }}</td>
                                                <td>{{ $dt->barangkeluar->barang->nama ?? '' }}</td>
                                                <td>{{ $dt->barangkeluar->barang->kode_barang ?? '' }}</td>
                                                <td>{{ $dt->alasan }}</td>
                                                <td>{{ $dt->jumlah }}</td>
                                                <td>{{ $dt->user->name ?? '' }}</td>
                                                <td>{{ tgl($dt->tanggal) }}</td>
                                                @if (Auth::user()->role == 'Pegawai Toko')
                                                    <td style="text-align: center"> <a href="#"
                                                            class="nav-link has-dropdown" data-toggle="dropdown"><i
                                                                class="fa fa-ellipsis-h " style="color: #777778"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li> <a href="#" id="delete-data"
                                                                    data-id={{ $dt->id }} class="nav-link"
                                                                    data-toggle="modal"
                                                                    data-target="#deleteModal">Delete</a></li>
                                                            </a></li>
                                                        </ul>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    @if ($data->count() > 0)
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size: 20px" class="modal-title" id="exampleModalCenterTitle"><i
                                class="fas fa-info-circle"></i><span></span> Konformasi Hapus!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('retur-jual.delete') }}" method="post">
                            @csrf
                            {{-- @method('DELETE') --}}
                            <input type="hidden" name="id" id="id">
                            <p> Apakah Anda yakin ingin menghapus data <span id="delete-nama"></span> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" style="width: 50px" class="btn btn-secondary">Ya</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="pdf" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size: 20px" class="modal-title" id="exampleModalCenterTitle"><i
                                class="fas fa-info-circle"></i><span></span> Sesuaikan </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('retur-jual.c') }}">
                            @csrf
                            <div class="form-group">
                                <label style="color: #6c757d">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="from" name="from">
                            </div>
                            <div class="form-group">
                                <label style="color: #6c757d">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="to" name="to">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Cetak</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[data-type='number']").keyup(function(event) {
                // skip for arrow keys
                if (event.which >= 37 && event.which <= 40) {
                    event.preventDefault();
                }
                var $this = $(this);
                var num = $this.val().replace(/,/gi, "");
                var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
                console.log(num2);
                // the following line has been simplified. Revision history contains original.
                //   $this.val(num2);
            });
        });
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        $(document).on("click", "#barcode_tampil", function() {
            $('#barcodeTampil').modal('show');
            let kode_barang = $(this).data('kode_barang');
            let id = $(this).data('id');
            $("#show-barcode").attr("src", "/storage/" + kode_barang + ".png");
            $("#show-id").val(id);
        });
        $(document).on('click', '#delete-data', function() {
            let id = $(this).attr('data-id');
            let nama_barang = $(this).attr('data-nama_barang');
            $('#id').val(id);
            $('#delete-nama').html(nama_barang);

        });
    </script>
@endpush
