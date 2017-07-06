
@extends('adminlte::page')

	@section('title', 'Kejaksaan')

		@section('content_header')
		
		@include('layouts.mainheader')
		;
Dashboard <small>Control panel</small>

@include ('layouts.section');

@stop

@section('content')


<! ==================== CONTENT ==================== >



@yield('content')



<!==================== CONTENT ====================>


@stop



@include ('layouts.footer');

@section('js');
<script> console.log('Hi!'); </script>
@stop

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
   </body>
   </html>   