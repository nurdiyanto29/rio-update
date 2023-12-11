@extends('layout.master')

@section('title')
Barang Transfer
@endsection
@push('css')
<style>
    .error{
        color: red;
        font-weight: 400px;
    }
    .select2-selection {
height: 37px !important;

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
              <h3 class="card-title">Data Barang Transfer</h3>
              <table>
                <hr>
                <tr>
                  <td>Kode Transaksi</td>
                  <td>: {{$transfer->kode_transaksi}}</td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td>: {{tgl($transfer->tanggal ?? "")}}</td>
                </tr>
                <tr>
                  <td>User</td>
                  <td>: {{$transfer->user->name ?? ''}}</td>
                </tr>
              </table>
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
                  <th>Satuan</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $x = 1
                    @endphp
                    @foreach ($data as $dt)
                    <tr>
                        @php
                            $total = $dt->barang->harga * $dt->jumlah
                        @endphp
                      <td>{{$x++}}</td>
                      <td>{{tgl($dt->transfer->tanggal) ?? ''}}</td>
                      <td>{{$dt->barang->nama ?? ''}}</td>
                      <td>{{$dt->barang->kode_barang ?? ''}}</td>
                      <td>{{$dt->barang->satuan->nama ?? ''}}</td>
                      <td>{{$dt->jumlah ?? ''}}</td>
                      {{-- <td>@currency($dt->barang->harga ?? '')</td>
                      <td>@currency($total ?? '')</td> --}}
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
        minimumInputLength: 3,
    });
});
    $(document).ready(function() {
    $('#id_barang2').select2({
        minimumInputLength: 3,
    });
});
$(document).ready(function(){
    $("input[data-type='number']").keyup(function(event){
      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40){
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
    $(function () {
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
    $(document).on('click', '#edit-data', function(){
          let id = $(this).data('id');
          let tanggal = $(this).data('tanggal');
          let jumlah = $(this).data('jumlah');
          let kode_barang = $(this).data('kode_barang');
          $('#edit_tanggal').val(tanggal);
          $('#edit_jumlah').val(jumlah);
          $('.kod-' + kode_barang).attr('selected', true).trigger('change');
          $('#edit-id').val(id);
      });
      $(document).on('click', '#delete-data', function(){
        let id = $(this).attr('data-id');
        // let nama_barang = $(this).attr('data-nama_barang');
         $('#id').val(id);
        //  $('#delete-nama').html(nama_barang);

      });
      $('#form').validate({ // initialize the plugin
            ignore: [],
            debug: false,
            rules: {
                nama_barang: {
                    required: true
                },
                jenis: {
                    required: true,

                },
                harga: {
                    required: true,

                },
                stok: {
                    required: true,

                },

            },
            messages: {
                nama_barang: {
                    required: "Nama Barang Wajib Diisi*",
                },
                jenis: {
                    required: "Jenis Wajib Diisi*",
                },
                harga: {
                    required: "Harga Wajib Diisi*",
                },
                stok: {
                    required: "Stok Wajib Diisi*",
                },

            },
        });
  </script>
@endpush
