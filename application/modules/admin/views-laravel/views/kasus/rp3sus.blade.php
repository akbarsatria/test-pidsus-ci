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
          <li class="active ">Daftar Penyidikan Khusus [rp3sus]</li>
      </ol>
    @stop

@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title text-uppercase">Daftar Penyidikan Khusus [rp3sus]</h3>

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
                  @include('partials._kasusrp3muma')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3mumb')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3mumc')
                  </td>
                </tr>
                <tr>
                  <td>
                  @include('partials._kasusrp3mumd')
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection
