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
          <li class="active">@yield('judul_breadcrumb')</li>
      </ol>
    @stop

@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">DAFTAR PERKARA PENYELIDIKAN</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Kasus</th>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2a')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2b')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2c')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp2d')
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection
