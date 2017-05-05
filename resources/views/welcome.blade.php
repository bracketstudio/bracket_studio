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
					<h2>Welcome to Bracket Studios</h2>
					<p>Bracket Studio is a group of 6 friends based out of San Antonio, TX, committed to bringing you all sorts of video game content to enjoy! From Let's Plays, First Impressions, Q and A videos, podcasts and more, be sure to check us out. Thanks for watching!</p>
				</div>
			</div>
        <hr>	
		</div>
		<div class="col-sm-4">
			<div class="well text-center">
				<h3>Discord</h3>
			</div>
			<div class="well">
				<a class="twitter-timeline" href="https://twitter.com/BracketStudio" data-tweet-limit="1">Tweets by BracketStudio</a> 
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> 
			</div>
			<div class="well">
				<ul class="juicer-feed" data-feed-id="bracketstudio" data-per="1" data-pages="1" data-truncate="20">
					<h1 class="referral"></h1>
				</ul>
			</div>
			<div class="well text-center">
				<h3>Support Us</h3>
				<a href="https://www.patreon.com/bracketstudio"><img src="/img/patreon.png" alt="patreon" width="100%"></a>
			</div>
		</div>
	</div>

@stop