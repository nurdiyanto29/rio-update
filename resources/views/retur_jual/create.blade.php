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
                                Retur Jual
                                <small class="float-right">{{ tgl( Carbon\Carbon::now()  ) }}</small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-lg-12">
                            <form action="{{ route('retur-jual.store') }}" onsubmit="return kirim()" name="form"
                                id="form" method="post" enctype="multipart/form-data">
                                <div class="section-body">
                                    <div class="invoice">
                                        @csrf
                                        @method('POST')
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <select class="form-control inpt" id="id_penjualan"
                                                            name="idd=penjualan" style="width: 100%" >
                                                            <option value="">Pilih Transaksi</option>
                                                            @foreach ($penjualan as $b)
                                                                <option value={{ $b->kode_transaksi }}>
                                                                    {{ $b->kode_transaksi }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <select class="form-control inpt" id="id_barang" name="idd"
                                                            style="width: 100%" >
                                                            >
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control inpt" id="jumlah" readonly
                                                            placeholder="Jumlah Beli">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control inpt" id="jumlah_kembali"
                                                            placeholder="Jumlah dikembalikan">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control inpt" id="alasan"
                                                            placeholder="Alasan">
                                                    </div>
                                                  
                                                        <input type="hidden" class="form-control inpt" id="nama"
                                                            placeholder="Alasan">
                                                  
                                                        <input type="hidden" class="form-control inpt" id="barang_id">
            
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
                                        
                                                                <th>Jumlah Kembali</th>
                                                                <th>Alasan pengembalian</th>
                                                                
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
            $('#id_barang').on('change', function() {
                $("#jumlah").val("");
                $("#jumlah_kembali").val("");
                $("#alasan").val("");
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: 'cek/' + id,
                    success: function(response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        response.forEach(element => {
                            $('#jumlah').val(
                                `${element['jumlah']}`
                            );
                            $('#barang_id').val(
                                `${element['barang_id']}`
                            );
                            $('#nama').val(
                                `${element['nama']}`
                            );
                        });
                    }
                });
            });

            $('#id_penjualan').select2();
            $('#id_penjualan').on('change', function() {
                let id = $(this).val();
                $('#id_barang').empty();
                $('#id_barang').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: 'cek-barang/' + id,
                    success: function(response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        $('#id_barang').empty();
                        $('#id_barang').append(
                            `<option >Pilih Barang*</option>`);
                        response.forEach(element => {
                            $('#id_barang').append(
                                `<option value="${element['barang_id']}">${element['nama_barang']}</option>`
                            );
                        });
                    }
                });
            });
        })

        $('#tambah').on('click', function() {

            var kode_barang = $('#id_barang').val();
            var penjualan_id = $('#id_penjualan').val();
            var jumlah = parseInt($('#jumlah').val());
            var jumlah_kembali = parseInt($('#jumlah_kembali').val());
            var nama = $('#nama').val();
            var nama_barang = $('#nama_barang').val();
            var alasan = $('#alasan').val();
            var barang_id = $('#barang_id').val();


            var cek = jumlah_kembali <= jumlah ? true : false;

            if (jumlah && kode_barang && cek) {
                $('input[name=idd]').val("");
                $('.incTbl').append(`
                        <tr>
                            <input type="hidden" readonly  class="kodein" name="kode[]" value=" ${penjualan_id}=${kode_barang}=${jumlah_kembali}=${alasan}=${barang_id}">
                                <td>${nama}</td>
                                <td> <input type="hidden" readonly  class="kodein" name="jumlah_kembali[]" value="${jumlah_kembali}">${jumlah_kembali} </td>
                                <td> <input type="hidden" readonly  class="kodein" name="alasan[]" value="${alasan}">${alasan} </td>
                                <td><span class="btn btn-sm btn-warning btn-delete"> <span class="fa fa-trash"></span> </span></td>
                            </tr>`);

                // $("#id_barang").val("");
                $("#jumlah").val("");
                $("#jumlah_kembali").val("");
                $("#alasan").val("");
                $('#id_barang').val($('select option:first').val()).trigger('change');
                $("#nama").val("");

            } else {
                toastr.error("Jumlah Tidak Boleh Melebihi stok");
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
            content: 'Hapus Data?',
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

        function kirim() {
            let valid = $('#form').valid();
            if (valid && !$('.kodein').map(function() {
                    return $(this).val();
                }).get().length) {
                $.alert('Barang belum dipilih!');
                return false
            }

            return true;
        }
    </script>
@endpush
