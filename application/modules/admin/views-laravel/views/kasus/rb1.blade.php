@extends('adminlte::page')

	@section('title', 'Kejaksaan')

	@section('css')

	@endsection

		@section('content_header')
			<div>
				<h3><a href='home' ><img class="push-left" src="dist/img/logo-kejaksaan.png" width="75"></a>
				  Direktorat Penyidikan
				  <small> Tindak Pidana Khusus</small>
				</h3>
			</div>
			<ol class="breadcrumb">
				  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				  <li class="active">Benda Sitaan [rb1]</li>
			</ol>
		@stop

			@section('content')

			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">DAFTAR BENDA SITAAN</h3>				
				</div>
				<div class="box-body">
					@include('partials._bendasitaan')
				</div>

		@stop

