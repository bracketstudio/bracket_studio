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
		    margin-bottom: 0;
		    border-radius: 0px;
		}
		img.resize {
		    width: 100%; /* you can use % */
		    height: auto;
		    margin-bottom: 10px;
		}
		.video-container {
		    position: relative;
		    padding-bottom: 56.25%;
		    padding-top: 35px;
		    height: 0;
		    overflow: hidden;
		    margin-bottom: 5px;
		}
		.video-container iframe {
		    position: absolute;
		    top:0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		}
	</style>
	<link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Russo+One|Press+Start+2P" rel="stylesheet">
	<link rel="stylesheet" href="/css/footer-basic-centered.css">
	<link rel="stylesheet" href="/css/footer-distributed.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">

</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="/"><img alt="[Bracket Studio]" src="/img/logo.png" ></a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/">[Main]</a></li>
				<li><a href="/videos">[Videos]</a></li>
				<li><a href="/buttonMosh">[Button Mosh]</a></li>
				<li><a href="/bsop">[BSOP]</a></li>
				<li><a href="/twitch">[Twitch]</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a target="_blank" href="https://www.instagram.com/bracketstudio/" class="fa fa-instagram"></a></li>
				<li><a target="_blank" href="https://www.youtube.com/channel/UC4jIPpJtuejO8NZGTM3xKjA" class="fa fa-youtube"></a></li>
				<li><a target="_blank" href="https://twitter.com/BracketStudio" class="fa fa-twitter"></a></li>
				<li><a target="_blank" href="https://www.facebook.com/bracketstudio" class="fa fa-facebook"></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="logo-site-title">
	<img class="resize" src="/img/bs.png" >
</div>	
<div class="container">
	@yield('content')
</div>

@include('footer')
	<script src="https://apis.google.com/js/platform.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>