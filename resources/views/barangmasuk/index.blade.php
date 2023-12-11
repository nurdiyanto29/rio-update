@extends('layout.master')

@section('title')
    Barang Masuk
@endsection
@push('css')
    <style>
        .error {
            color: red;
            font-weight: 400px;
        }

        .select2-selection {
            height: 37px !important;

        }

        .error {
            color: #fff;
            font-size: 12px;
            width: unset;
        }

        .errorTxt {
            /* min-height: 20px; */
            background-color: #f39c12 !important;
            margin-bottom: 10px;
        }

        .error2 {
            padding-left: 20px;
            padding-top: 6px;
            padding-bottom: 6px;
            color: #fff
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                                <h3 class="card-title">Data Barang Masuk</h3>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                        data-target="#barang" type="button">
                                        <i class="fas fa-plus"></i> Tambah
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th style="width: 20px">No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Admin</th>
                                            <th>Jumlah Masuk</th>
                                            <th>Harga Beli</th>
                                            <th>Total Harga</th>
                                            <th><i class="fas fa-cogs"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $x = 1;
                                        @endphp
                                        @foreach ($data as $dt)
                                            <tr>
                                                <td>{{ $x++ }}</td>
                                                <td>{{ tgl($dt->tanggal) }}</td>
                                                <td>{{ $dt->barang->nama_barang }}</td>
                                                <td style="cursor: pointer;" data-id="{{ $dt->id }}"
                                                    data-kode_barang="{{ $dt->barang->kode_barang }}" id="barcode_tampil">
                                                    {{ $dt->barang->kode_barang }}</td>
                                                <td>{{ $dt->user->name ?? '' }}</td>
                                                <td>{{$dt->jumlah}} - {{$dt->satuan->nama}}</td>
                                                <td>@currency( $dt->harga_beli )</td>
                                                <td>@currency($dt->jumlah*$dt->harga_beli)</td>
                                                <td style="text-align: center"> <a href="#"
                                                        class="nav-link has-dropdown" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h " style="color: #777778"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="nav-link" id="edit-data" data-toggle="modal"
                                                                data-target="#editmodal" data-tanggal="{{ $dt->tanggal }}"
                                                                data-kode_barang="{{ $dt->barang->id }}"
                                                                data-jumlah="{{ $dt->jumlah }}"
                                                                data-id="{{ $dt->id }}" href="#">Edit</a></li>
                                                        <li> <a href="#" id="delete-data" data-id={{ $dt->id }}
                                                                data-tanggal={{ $dt->tanggal }} class="nav-link"
                                                                data-toggle="modal" data-target="#deleteModal">Delete</a>
                                                        </li>
                                                        </a></li>
                                                    </ul>
                                                </td>
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
        <div class="modal fade" id="barang" tabindex="-1" role="dialog" aria-labelledby="barangTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="barangTitle">Tambah barang masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('barangmasuk.store') }}" name="formcreate" id="formcreate" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="errr">
                                <div class="errorTxt"></div>
                            </div>
                            <div class="form-group">
                                <label style="color: #6c757d">Kode Barang</label>
                                <select class="select2-selection select2-selection--single" id="id_barang"
                                    style="width: 100%" name="id_barang">
                                    <option value="">Pilih Barang</option>
                                    @foreach ($barang as $b)
                                        <option value={{ $b->id }}>{{$b->nama_barang}}  ({{ $b->kode_barang }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="color: #6c757d">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="form-group">
                                <label style="color: #6c757d">Jumlah</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah"
                                    data-type="number">
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
                            <form action="{{ route('barangmasuk.delete') }}" method="post">
                                @csrf
                                {{-- @method('DELETE') --}}
                                <input type="hidden" name="id" id="id">
                                <p> Apakah Anda yakin ingin menghapus data  ?</p>
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
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Barang Masuk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('barangmasuk.update', $dt->id) }}" name="formedit" id="formedit"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUt')
                                <div class="errr">
                                    <div class="errorTxt"></div>
                                </div>
                                <input type="hidden" class="form-control" id="edit-id" name="id">
                                <div class="form-group">
                                    <label style="color: #6c757d">Kode Barang</label>
                                    <select class="select2-selection select2-selection--single" id="id_barang2"
                                        style="width: 100%" name="id_barang" required>
                                        <option value="">Pilih Kode Barang</option>
                                        @foreach ($barang as $b)
                                            <option value={{ $b->id }} class="kod-{{ $b->id }}">
                                                {{ $b->kode_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style="color: #6c757d">Tanggal</label>
                                    <input type="date" class="form-control" id="edit_tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label style="color: #6c757d">Jumlah</label>
                                    <input type="text" class="form-control" id="edit_jumlah" name="jumlah"
                                        data-type="number" required>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#id_barang').select2({

            });
        });
        $(document).ready(function() {
            $('#id_barang2').select2({

            });
        });
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
                $this.val(num2);
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
        $(document).on('click', '#edit-data', function() {
            let id = $(this).data('id');
            let tanggal = $(this).data('tanggal');
            let jumlah = $(this).data('jumlah');
            let kode_barang = $(this).data('kode_barang');
            $('#edit_tanggal').val(tanggal);
            $('#edit_jumlah').val(jumlah);
            $('.kod-' + kode_barang).attr('selected', true).trigger('change');
            $('#edit-id').val(id);
        });
        $(document).on('click', '#delete-data', function() {
            let id = $(this).attr('data-id');
            // let nama_barang = $(this).attr('data-nama_barang');
            $('#id').val(id);
            //  $('#delete-nama').html(nama_barang);

        });
    </script>
    <script>
          jQuery(function($) {
                var validator = $('#formcreate').validate({
                    rules: {
                        id_barang: {
                            required: true
                        },
                        tanggal: {
                            required: true
                        },
                        jumlah: {
                            required: true
                        },

                    },
                    messages: {
                        id_barang: {
                            required: "Kode Barang Wajib Diisi*",
                        },
                        jumlah: {
                            required: "Jumlah Wajib Diisi*",
                        },
                        tanggal: {
                            required: "Tanggal Wajib Diisi*",
                        },


                    },
                    errorElement: 'div',
                    errorLabelContainer: '.errorTxt',
                    errorClass: 'error2',

                    highlight: function(element, errorClass) {
                        $(element).parents("div.errorTxt").addClass(errorClass)
                    },
                });
            });
          jQuery(function($) {
                var validator = $('#formedit').validate({
                    rules: {
                        id_barang2: {
                            required: true
                        },
                        edit_tanggal: {
                            required: true
                        },
                        edit_jumlah: {
                            required: true
                        },

                    },
                    messages: {
                        id_barang: {
                            required: "Kode Barang Wajib Diisi*",
                        },
                        jumlah: {
                            required: "Jumlah Wajib Diisi*",
                        },
                        tanggal: {
                            required: "Tanggal Wajib Diisi*",
                        },


                    },
                    errorElement: 'div',
                    errorLabelContainer: '.errorTxt2',
                    errorClass: 'error2',

                    highlight: function(element, errorClass) {
                        $(element).parents("div.errorTxt2").addClass(errorClass)
                    },
                });
            });

    </script>
@endpush
