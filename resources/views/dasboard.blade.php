@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')

    @if (Auth::user()->role == 'Pegawai Toko')
        @include('dashboard.pegawai_toko')
    @endif
    @if (Auth::user()->role == 'Pegawai Gudang')
        @include('dashboard.pegawai_gudang')
    @endif
    @if (Auth::user()->role == 'Pemilik')
        @include('dashboard.pegawai_pemilik')
    @endif
@endsection
