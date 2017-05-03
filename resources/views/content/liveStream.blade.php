@extends('layouts.master')

@section('content')

<h1>Twitch Live Stream</h1>
<div class="video-container">
	<iframe
	    src="https://player.twitch.tv/?volume=0.5&channel=bracketstudio"
	    frameborder="0"
	    scrolling="no"
	    allowfullscreen="true">
	</iframe>
	
</div>

@stop