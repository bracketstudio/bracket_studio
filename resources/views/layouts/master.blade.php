<!DOCTYPE html>
<html lang="en">
<head>
	<!-- HEAD TAGS -->
	@include('partials.head')
</head>
<body>
	<!-- NAVBAR -->
	@include ('partials.navbar')

	<!-- HEADER IMAGE -->
	<div class="logo-site-title">
		<img class="resize" src="/img/bs.png" >
	</div>	

	<!-- PAGE CONTENT -->
	<div class="container">
		@yield('content')
	</div>

	<!-- FOOTER -->
	@include('footer')

	<!-- JS SCRIPTS -->
	@include('partials.common_js')
</body>
</html>