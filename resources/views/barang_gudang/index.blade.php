@extends('layout.master')

@section('title')
    Barang Gudang
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
                                <h3 class="card-title">Data Barang Gudang</h3>
                                <div class="form-group">
                                    <button class="btn btn-success btn-sm float-right"
                                    onclick="window.location='{{ url('barang-gudang/cetak-pdf') }}'" type="button">
                                    Cetak PDF
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                {{-- {{nominal(60000000)}} --}}
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th style="width: 20px">No</th>
                                            <th>Nama Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Jenis</th>
                                            <th>Harga Beli</th>
                                            <th>Stok Gudang</th>
                                            {{-- <th><i class="fas fa-cogs"></i></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $x = 1;
                                        @endphp
                                        @foreach ($data as $dt)

                                            <tr>
                                                <td>{{ $x++ }}</td>
                                                <td>{{ $dt->barang->nama ?? '' }}</td>
                                                <td style="cursor: pointer;" data-id="{{ $dt->id }}"
                                                    data-kode="{{ $dt->barang->kode_barang ?? '' }}" id="barcode_tampil">
                                                    {{ $dt->barang->kode_barang ?? '' }}</td>
                                                <td>{{ $dt->barang->jenis->nama ?? '' }}</td>

                                                {{-- @if ($dt->barang->satuan->parent_id) --}}
                                                    {{-- <td> {{nominal($dt->harga_beli  $dt->barang->satuan->kelipatan ?? 0)}}</td> --}}
                                                {{-- @else --}}
                                                    <td> {{nominal($dt->harga_beli ?? 0)}}</td>
                                                {{-- @endif --}}

                                                @if ($dt->barang->satuan->parent_id)
                                                    <td>{{ $dt->stok * $dt->barang->satuan->kelipatan }}
                                                        {{ $dt->satuan->parent->nama ?? '' }} atau {{ $dt->stok }}  {{ $dt->satuan->nama ?? '' }}
                                                        </td>
                                                @else
                                                    <td>{{ $dt->stok }} {{ $dt->satuan->nama ?? '' }}</td>
                                                @endif

                                                {{-- <td>{{ $dt->stok }} {{ $dt->satuan->nama ?? '' }}</td> --}}

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
        <div class="modal fade" id="barcodeTampil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <img src="" style="width:400px;" class="center" id="show-barcode">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($data->count() > 0)
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
                aria-hidden="true">
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
                            <form action="{{ route('barang.delete') }}" method="post">
                                @csrf
                                {{-- @method('DELETE') --}}
                                <input type="hidden" name="id" id="id">
                                <p> Apakah Anda yakin ingin menghapus data ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" style="width: 50px" class="btn btn-secondary">Ya</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('barang-gudang.update', $dt->id) }}" name="formedit" id="formedit"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUt')
                                <input type="hidden" class="form-control" id="edit-id" name="id">

                                <div class="form-group">
                                    <label style="color: #6c757d">Harga Beli</label>
                                    <input type="text" class="form-control" id="edit_harga" name="harga" required>
                                </div>

                                <div class="modal-footer bg-whitesmoke" style="margin-right:-25px">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
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
            let kode = $(this).data('kode');
            let id = $(this).data('id');
            $("#show-barcode").attr("src", "/storage/" + kode + ".png");
            $("#show-id").val(id);
        });
        $(document).on('click', '#edit-data', function() {
            let id = $(this).data('id');
            let harga = $(this).data('harga');

            $('#edit_harga').val(harga);

            $('#edit-id').val(id);
        });
    </script>
@endpush
