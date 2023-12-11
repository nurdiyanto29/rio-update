@extends('layout.master')

@section('title')
    Edit Barang
@endsection
@push('css')
    <style>
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

        .ck-editor__editable {
            min-height: 200px;
        }

        .select2-selection {
            height: 37px !important;

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
                                <h3 class="card-title">Edit Barang</h3>
                            </div>
                            <form role="form" action="{{ route('barang.update', $data['barang']->id) }}" name="form"
                                id="form" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="errr">
                                        <div class="errorTxt"></div>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="{{ $data['barang']->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Kode Barang</label>
                                        <input type="text" class="form-control" id="kode_barang" name="kode_barang"
                                            value="{{ $data['barang']->kode_barang }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Jenis</label>
                                        <select class="select2-selection select2-selection--single" id="jenis_id"
                                            style="width: 100%" name="jenis_id">
                                            <option selected>Pilih Jenis Barang</option>
                                            @foreach ($data['jenis'] as $b)
                                                <option value={{ $b->id }} {{ $b->id == $data['barang']->jenis_id ? 'selected' : '' }}>{{ $b->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #6c757d">Satuan</label>
                                        <select class="select2-selection select2-selection--single" id="satuan_id"
                                            style="width: 100%" name="satuan_id">
                                            <option selected>Pilih Satuan</option>
                                            @foreach ($data['satuan'] as $b)
                                                <option value={{ $b->id }} {{ $b->id == $data['barang']->satuan_id ? 'selected' : '' }}>{{ $b->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <label style="color: #6c757d">Stok</label>
                                        <input type="text" class="form-control" id="stok" name="stok"
                                            value="{{ $data['barang']->stok }}">
                                    </div>
                                   
                                </div>
                                <!-- /.card-body -->

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
                    satuan: {
                        required: true
                    },
                    jenis: {
                        required: true
                    },
                
                },
                messages: {
                    nama: {
                        required: "Nama Barang Wajib Diisi*",
                    },
                    satuan: {
                        required: "Satuan Barang Wajib Diisi*",
                    },
                    jenis: {
                        required: "Jenis Barang Wajib Diisi*",
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
