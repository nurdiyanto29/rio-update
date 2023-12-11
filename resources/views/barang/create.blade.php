@extends('layout.master')

@section('title')
    Tambah Barang
@endsection
@push('css')
    <style>
        /* .error {
                color: red;
                font-weight: 400px;
            } */

        .ck-editor__editable {
            min-height: 200px;
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


        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #007bff;
            border-color: #006fe6;
            color: #000;
            padding: 0 10px;
            margin-top: 0.31rem;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('image-uploader-master/dist/image-uploader.min.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
@endpush
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Barang</h3>
                            </div>
                            <form role="form" action="{{ route('barang.store') }}" name="form" id="form"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="errr">
                                        <div class="errorTxt"></div>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                               
                                    <div class="form-group">
                                        <label style="color: #6c757d">Jenis</label>
                                        <select class="select2-selection select2-selection--single" id="jenis_id"
                                            style="width: 100%" name="jenis_id" required>
                                            <option value="">Pilih Jenis Barang</option>
                                            @foreach ($data['jenis'] as $b)
                                                <option value={{ $b->id }}>{{ $b->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Satuan Barang</label>
                                        <select class="select2-selection select2-selection--single" id="satuan_id"
                                            style="width: 100%" name="satuan_id" required>
                                            <option value="">Pilih Satuan Barang</option>
                                            @foreach ($data['satuan'] as $b)
                                                <option value={{ $b->id }}>1 {{ $b->nama ?? '' }} di Gudang = {{$b->kelipatan ?? ''}} {{ $b->parent->nama ?? $b->nama }} di Toko</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Stok Awal</label>
                                        <input type="number" class="form-control" id="stok_awal" name="stok_awal" required>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Harga Satuan Awal</label>
                                        <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" required>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Kadaluarsa (Opsional)</label>
                                        <input type="date" class="form-control" id="kadaluarsa" name="kadaluarsa" >
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    @endsection
    @push('js')
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ asset('image-uploader-master/dist/image-uploader.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#jenis_id').select2({

                });
            });
            $(document).ready(function() {
                $('#satuan_id').select2({

                });
            });
            jQuery(function($) {
                var validator = $('#form').validate({
                    rules: {
                        nama: {
                            required: true
                        },
                        jenis_id: {
                            required: true
                        },
                        satuan_id: {
                            required: true
                        },
                        // harga_jual: {
                        //     required: true
                        // },
                    },
                    messages: {
                        nama: {
                            required: "Nama Barang Wajib Diisi*",
                        },
                        jenis_id: {
                            required: "Jenis Barang Wajib Diisi*",
                        },
                        satuan_id: {
                            required: "Satuan Barang Wajib Diisi*",
                        },
                        harga_jual: {
                            required: "Harga Jual Wajib Diisi*",
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
        </script>
    @endpush
