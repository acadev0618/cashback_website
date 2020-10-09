<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ISHOPREWORDS @yield('header')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/app.css')}}">
		@include('common.meta.client')
		@yield('css')

	</head>
	<body>
		<div class="ecommerce">
			
				@include('common.header.client')
				
			
				@yield('content')
			
			<div>
				@include('common.footer.client')
			</div>
		</div>
		
		@include('common.script.client')

	</body>
</html>   