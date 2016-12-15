<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{asset('plugin/bootstrap-3/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
	<div class="container">
		@include('admin.template.partials.nav')
		<section>
		   <div class="panel panel-default">
	   	   	 <div class="panel-heading">Home</div>
	   	   		<div class="panel-body">
	   	   			@include('admin.template.partials.errors')
					@yield('content')
				</div>
			</div>
		</section>
		<footer>
			@include('admin.template.partials.footer')
		</footer>
	</div>


	<script src="{{ asset('plugin/jquery/jquery-3.1.1.js')}}"></script>
	<script src="{{ asset('plugin/bootstrap-3/js/bootstrap.js')}}"></script>

</body>
</html>