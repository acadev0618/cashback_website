<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Cashback admin @yield('header')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	@include('common.meta.admin')

	@yield('css')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/adminapp.css')}}">
	<link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
	<div>
		@include('common.header.admin')
		<div class="page-container">
			@include('common.sidebar.sidebar')
			@yield('content')
		</div>
		@include('common.footer.admin')
	</div>
	<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js')}} before bootstrap.min.js')}} to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
	@include('common.script.admin')
	@yield('script')
</body>
</html>