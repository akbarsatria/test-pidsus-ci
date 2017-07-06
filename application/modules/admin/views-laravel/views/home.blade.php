@extends('adminlte::page')

@section('title', 'Kejaksaan')

@section('css')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</style>

@endsection

@section('content_header')
<div><h3><a href='home' ><img class="push-left" src="dist/img/logo-kejaksaan.png" width="75"></a>
  Dashboard
  <small>Control panel</small>
</h3>
</div><ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Dashboard</li>
</ol>
@endsection

@section('content')

@include('partials._dataperkara')

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    @include('partials._3dpiedonut')
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    @include('partials._3dbubble')
  </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
  @include('partials._pemulihanaset')
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    @include('partials._kerugiannegara')
  </div>
</div>
@endsection

@section('js')



@endsection