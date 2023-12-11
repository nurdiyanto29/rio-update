@extends('layout.master')

@section('title')
    Edit Barang
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('barang.index')}}">Barang</a></li>
              <li class="breadcrumb-item active">Detail Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              @if (App\Models\Gambar::where('id_barang', $data->id)->exists())
              <div class="col-12">
                  @php
                    $gbr =  App\Models\Gambar::where('id_barang', $data->id)->first()
                  @endphp
                <img src="{{URL::to($gbr->file)}}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                  @foreach ($data->gambar as $dt)
                  <div
                  @if ($loop->first)
                  class="product-image-thumb active"
                  @else
                  class="product-image-thumb"
                  @endif
                    ><img src="{{URL::to($dt->file)}}" alt="Product Image"></div>
                  @endforeach
              </div>
              @else
              <div class="col-12">
              <img src="{{asset('dist/img/default.PNG')}}" class="product-image" alt="Product Image">
            </div>
              @endif
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$data->nama_barang}} ({{$data->jenis}})</h3>
              <p>{!!$data->keterangan!!}</p>
              <hr>
              <h4><span style="color: red; font-weight:900"> {{$data->stok}}</span> Stok Tersedia </h4>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
               @currency($data->harga)
                </h2>
              </div>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
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
