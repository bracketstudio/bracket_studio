@extends('layouts.master')

@section('content')
	<div class="row">

		<div class="col-sm-8">
			<div class="row">
				<div class="col-sm-12">
                    <div class="video-container">
					   <iframe width="100%" height="500px" src="https://www.youtube.com/embed/B5oQYEo4uB4" frameborder="0" allowfullscreen></iframe>
                    </div>
					<div class="g-ytsubscribe" data-channel="BracketStudio" data-layout="full" data-count="default"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h1>Welcome to Bracket Studios</h1>
					<p>Bracket Studio is a group of 6 friends based out of San Antonio, TX, committed to bringing you all sorts of video game content to enjoy! From Let's Plays, First Impressions, Q and A videos, podcasts and more, be sure to check us out. Thanks for watching!</p>
				</div>

				<div class="col-sm-12">
					<img src="/img/con.jpg" width="100%" ">
				</div>
			</div>
        <hr>	
		</div>

		<div class="col-sm-4">
			<!-- DISCORD -->
			<div class="well text-center">
				<h3>Discord</h3>
			</div>
			<!-- TWITTER -->
			<div class="well">
				<a class="twitter-timeline" href="https://twitter.com/BracketStudio" data-tweet-limit="1">Tweets by BracketStudio</a> 
			</div>
			<!-- INSTAGRAM -->
			<div class="well" style="padding-bottom: 0px">
				<ul class="juicer-feed" data-feed-id="bracketstudio" data-per="1" data-pages="1" data-truncate="25">
					<h1 class="referral" style="display: none;"></h1>
				</ul>
			</div>
			<!-- SUPPORT US --> 
			<div class="well text-center">
				<h3>Support Us</h3>
				<a href="https://www.patreon.com/bracketstudio"><img src="/img/patreon.png" alt="patreon" width="100%"></a>
			</div>
		</div>

	</div>

@stop