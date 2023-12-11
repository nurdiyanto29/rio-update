@extends('layout.master')

@section('title')
    Pembelian Barang
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
                                Pembelian
                                <small class="float-right">{{ tgl( Carbon\Carbon::now()  ) }}</small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-lg-12">
                            <form action="{{ route('pembelian.store') }}" onsubmit="return kirim()" name="form"
                                id="form" method="post" enctype="multipart/form-data">
                                <div class="section-body">
                                    <div class="invoice">
                                        @csrf
                                        @method('POST')
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <select class="form-control inpt" id="suppliyer_id"
                                                            name="suppliyer_id" style="width: 100%">
                                                            <option value="">Pilih Suppliyer</option>
                                                            @foreach ($suppliyer as $b)
                                                                <option value={{ $b->id }}>{{ $b->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <select class="form-control inpt" id="id_barang" name="idd"
                                                            style="width: 100%">
                                                            <option value="">Pilih Barang</option>
                                                            @foreach ($barang as $b)
                                                                <option value={{ $b->barang->kode_barang }}>
                                                                    {{ $b->barang->nama }}
                                                                    ({{ $b->barang->kode_barang }})
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control inpt" id="satuan"
                                                            placeholder="satuan" disabled>
                                                        <input type="hidden" class="form-control inpt" id="satuan_id"
                                                            placeholder="satuan_id">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <input type="hidden" class="form-control" id="nama"
                                                        placeholder="Nama Barang">
                                                    <div class="form-group col-md-3">
                                                        <input type="date" class="form-control inpt" id="kadaluarsa"
                                                            placeholder="kadaluarsa">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control inpt" id="jumlah"
                                                            placeholder="jumlah">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control inpt" id="harga_beli"
                                                            placeholder="Harga Beli Terakhir" >
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
                                                                <th>Satuan</th>
                                                                <th>Kadaluarsa</th>
                                                                <th>harga beli/@</th>
                                                                <th>Total Harga</th>
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
            $('#id_barang').select2();
            $('#suppliyer_id').select2();



            $('#suppliyer_id').on('change', function() {
                $("#jumlah").val("");
                $("#satuan").val("");
                $("#satuan_id").val("");
                $("#harga_beli").val("");
                $('#id_barang').val($('select option:first').val()).trigger('change');
                // $('#satuan_id').val($('select option:first').val()).trigger('change');

            });
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
                            $('#satuan_id').val(
                                `${element['satuan_id']}`
                            );
                            $('#harga_beli').val(
                                `${element['harga_beli']*element['kelipatan']}`
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
                var satuan_id = $('#satuan_id').val();
                var kadaluarsa = $('#kadaluarsa').val();

                var totalHarga = jumlah * harga_beli;


                var cek = jumlah > 0 ? true : false;

                if (jumlah && kode_barang && cek && harga_beli) {
                    $('input[name=idd]').val("");
                    $('.incTbl').append(`
                        <tr>
                            <input type="hidden" readonly  class="kodein" name="kode[]" value="${kode_barang}=${jumlah}=${harga_beli}=${satuan_id}=${totalHarga}=${kadaluarsa}">
                                <td>${nama}</td>
                                <td>${kode_barang} </td>
                                <td> <input type="hidden" readonly  class="kodein" name="jumlah[]" value="${jumlah}">${jumlah} </td>
                                <td>${satuan} </td>
                                <td>${kadaluarsa} </td>
                                <td>${harga_beli} </td>
                                <td>${totalHarga} </td>
                                <td><span class="btn btn-sm btn-warning btn-delete"> <span class="fa fa-trash"></span> </span></td>
                            </tr>`);

                    $("#jumlah").val("");
                    $("#kadaluarsa").val("");
                    $("#satuan").val("");
                    $("#harga_beli").val("");
                    $('#id_barang').val($('select option:first').val()).trigger('change');
                    // $('#suppliyer_id').val($('select option:first').val()).trigger('change');

                } else {
                    toastr.error(
                        "Data Tidak valid"
                    );
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
