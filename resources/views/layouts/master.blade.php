<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>[BRACKET STUDIO]</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.navbar {
		    margin-bottom:0;
		    border-radius: 0px;
		}
	</style>
	<link rel="stylesheet" href="/css/footer-basic-centered.css">
	<link rel="stylesheet" href="/css/footer-distributed.css">
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
				<img alt="BS logo" src="">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/main">[Main]</a></li>
				<li><a href="/content">[Content]</a></li>
				<li><a href="/synergy">[Synergy]</a></li>
				<li><a href="/patreon">[Patreon]</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a target="_blank" href="https://twitter.com/BracketStudio" class="fa fa-twitter"></a></li>
				<li><a target="_blank" href="https://www.facebook.com/bracketstudio" class="fa fa-facebook"></a></li>
				<li><a target="_blank" href="https://www.youtube.com/channel/UC4jIPpJtuejO8NZGTM3xKjA" class="fa fa-youtube"></a></li>
				<li><a target="_blank" href="https://www.instagram.com/bracketstudio/" class="fa fa-instagram"></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="logo-site-title">
	<img src="/img/bs.jpg" height='500' width='100%'>
</div>	
<div class="container">
	@yield('content')
</div>

@include('footer')
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>