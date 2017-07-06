@extends('adminlte::page')

  @section('title', 'Kejaksaan')

  @section('css')

  @endsection

    @section('content_header')
      <div>
        <h3><a href='home' ><img class="push-left" src="dist/img/logo-kejaksaan.png" width="75"></a>
          Direktorat Penyidikan
          <small> Tindak Pidana Khusus</small>
        </h3></div>
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">@yield('bcrumb')</li>
      </ol>
    @stop

@section('content')

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">@yield('judul')</h3>
  </div>
  <div class="container">
  @yield('template')
  </div>
</div>
@endsection

@include('layouts.footer')