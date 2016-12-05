<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{asset('plugin/bootstrap-4/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
	@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>
	<footer>
		@include('admin.template.partials.footer')
	</footer>


	<script src="{{ asset('plugin/jquery/jquery-3.1.1.js')}}"></script>
	<script src="{{ asset('plugin/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>