@extends('layout.master')

@section('title')
    Trasfer Barang
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endpush
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                Trasfer Barang
                                <small class="float-right">{{ tgl(Date('Y-m-d')) }}</small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-lg-12">
                            <form action="{{ route('transfer.store') }}" onsubmit="return kirim()" name="form"
                                id="form" method="post" enctype="multipart/form-data">
                                <div class="section-body">
                                    <div class="invoice">
                                        @csrf
                                        @method('POST')
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <select class="form-control inpt" id="id_barang" name="idd"
                                                            style="width: 100%" required>
                                                            <option value="">Pilih Barang</option>
                                                            @foreach ($barang as $b)
                                                                <option value={{ $b->kode_barang }}>{{ $b->nama }}
                                                                    ({{ $b->kode_barang }})
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" id="nama" disabled
                                                            placeholder="Nama Barang">
                                                    </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="form-group col-md-3">
                                                            <input type="text" class="form-control" id="satuan" disabled
                                                                placeholder="Satuan">
                                                            </div>
                                                            <input type="hidden" class="form-control" id="satuan_idd"
                                                                placeholder="Satuan">
                                                        <div class="form-group col-md-3">
                                                            <input type="text" class="form-control" id="stok" disabled
                                                                placeholder="Stok">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <input type="text" class="form-control inpt" id="jumlah"
                                                            placeholder="jumlah">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <P><button type="button" class="w3-btn w3-blue"
                                                                    id="tambah">Add</button>
                                                        </div>
                                                    </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped" style="" id="list-inv">
                                                        <thead style="height: 10px">
                                                            <tr>
                                                                <th>Nama Barang</th>
                                                                <th>Kode</th>
                                                                <th>Jumlah</th>
                                                             
                                                                <th><i class="fas fa-cog"></i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="height: 20px;" class="incTbl">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary">simpan</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>




    <script>
        $('#form').validate({ // initialize the plugin
            rules: {
                nominal: {
                    required: true
                },
                id_kategori_pengeluaran: {
                    required: true
                },

            }
        });

        $(document).ready(function() {
            $('#select2').select2();
            $('#id_barang').on('change', function() {
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: 'cek/' + id,
                    success: function(response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        response.forEach(element => {
                            $('#nama').val(
                                `${element['nama']}`
                            );
                            $('#satuan').val(
                                `${element['satuan']}`
                            );
                            $('#stok').val(
                                `${element['stok']}`
                            );
                            $('#satuan_idd').val(
                                `${element['satuan_idd']}`
                            );

                        });
                    }
                });
            });

            $('#tambah').on('click', function() {

                var kode_barang = $('#id_barang').val();
                var satuan = $('#satuan').val();
                var jumlah = parseInt($('#jumlah').val());
                var stok = parseInt($('#stok').val());
                var nama = $('#nama').val();
                var nama_barang = $('#nama_barang').val();
                var harga_beli = $('#harga_beli').val();
                var satuan_idd = $('#satuan_idd').val();

                var cek = jumlah <= stok ? true : false;

                if (jumlah && kode_barang && cek ) {
                    $('input[name=idd]').val("");
                    $('.incTbl').append(`
                        <tr>
                            <input type="hidden" readonly  class="kodein" name="kode[]" value="${kode_barang}=${jumlah}=${satuan_idd}">
                                <td>${nama}</td>
                                <td>${kode_barang} </td>
                                <td> <input type="hidden" readonly  class="kodein" name="jumlah[]" value="${jumlah}">${jumlah} ${satuan} </td>
                                <td><span class="btn btn-sm btn-warning btn-delete"> <span class="fa fa-trash"></span> </span></td>
                            </tr>`);

                } else {
                    toastr.error("Jumlah Tidak Boleh Melebihi stock ");
                    return false;
                }


            });


            $(document).on('click', '.btn-delete', function(event) {
                event.preventDefault();
                let tr = $(this).closest('tr');
                $.confirm({
                    theme: 'material',
                    closeIcon: true,
                    animation: 'none',
                    title: '',
                    content: 'Hapus Barang?',
                    buttons: {
                        batal: {},
                        Hapus: {
                            btnClass: 'btn-blue',
                            keys: ['enter', 'shift'],
                            action: function() {
                                tr.remove()
                            }
                        }
                    }
                });

            });
        });





        function kirim() {
            let valid = $('#form').valid();
            if (valid && !$('.kodein').map(function() {
                    return $(this).val();
                }).get().length) {
                $.alert('Barang belum dipilih!');
                return false
            }

            return valid;
        }
    </script>
@endpush
