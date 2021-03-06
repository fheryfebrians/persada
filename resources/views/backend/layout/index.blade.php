<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beton Emas Persada @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Fav and touch icons -->
	{{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon.ico') }}" /> --}}
	<link rel="icon" href="{{ asset('images/favicon.jpg') }}">
	<!-- Bootstrap -->
	<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/bootstrap-theme.css') }}" rel="stylesheet">
	
	<!-- Custom -->
	<link href="{{ asset('admin/css/fonts/fonts.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/> -->
	
	<!-- <link href="{{ asset('admin/css/datatables/css/demo_table.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('admin/css/datatables/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/main.css') }}" rel="stylesheet">
	
	<link href="{{ asset('admin/css/datatable_1_10/datatables.css') }}" rel="stylesheet">
		
	<!----Header-css---->
	<link href="{{ asset('admin/css/sidemenu.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/jquery.navgoco.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('admin/css/jquery.mCustomScrollbar.css') }}">
	<link href="{{ asset('admin/css/summernote.min.css') }}" rel="stylesheet">
	<style>
		.note-editable{
			margin: 0 20px !important;
		}
		.note-editable ol{
			margin: 0 30px  !important;
		}
		.p20{
			padding: 0 20px !important;
		}
	</style>

	
	@yield('styles')

	<!-- Scripts -->
	<script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>
	<script src="{{ asset('admin/js/sidemenu.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.navgoco.js') }}"></script>
	<script src="{{ asset('admin/js/jquery-ui-1.11.4.custom/jquery-ui.js') }}"></script>
	<script src="{{ asset('admin/js/timepicker/jquery-ui-timepicker-addon.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('admin/js/summernote.min.js') }}"></script>
	@yield('scripts')

</head>
<body>
	<div id="wrapper">
		@include('backend.layout.sidebar')
		<section id="content">
			@include('backend.layout.header')
			@yield('content')
		</section>
	</div>
</body>
</html>