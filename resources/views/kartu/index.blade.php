@extends('layout.master')

@section('title')
    Kartu Persediaan
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
                                <ul class="nav nav-pills">

                                    <li class="nav-item"><a class="nav-link active" href="#hitung"
                                            data-toggle="tab">Penghitungan</a></li>

                                    <li class="nav-item"><a class="nav-link " href="#data_kartu"
                                            data-toggle="tab">Data Kartu
                                            Persediaan</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div id="hitung" class="tab-pane active">
                                        @include('kartu.penghitungan')
                                    </div>
                                    <div id="data_kartu" class="tab-pane ">
                                        @include('kartu.data_kartu')
                                    </div>

                                </div>

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
                searching: false, // Disable search
                ordering: false, // Disable sorting
                paging: false // Disable pagination
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
        $(document).on('click', '#delete-data', function() {
            let id = $(this).attr('data-id');
            let nama = $(this).attr('data-nama');
            $('#id').val(id);
            $('#delete-nama').html(nama);

        });
    </script>
@endpush
