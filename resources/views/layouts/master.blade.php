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
	</style>
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
				<li><a href="#">[About]</a></li>
				<li><a href="#">[Main]</a></li>
				<li><a href="#">[Content]</a></li>
				<li><a href="#">[Synergy]</a></li>
				<li><a href="#">[Patreon]</a></li>
				<li><a href="#">[Support]</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a target="_blank" href="https://twitter.com/BracketStudio" class="fa fa-twitter"></a></li>
				<li><a target="_blank" href="https://www.facebook.com/bracketstudio" class="fa fa-facebook"></a></li>
				<li><a target="_blank" href="https://www.youtube.com/channel/UC4jIPpJtuejO8NZGTM3xKjA" class="fa fa-youtube"></a></li>
				<li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	@yield('content')
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>