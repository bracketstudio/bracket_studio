@extends('layouts.master')

@section('content')

<h1>Twitch Live Stream</h1>
<div class="video-container">
	<iframe
	    src="http://player.twitch.tv/?channel=bracketstudio"
	    frameborder="true"
	    scrolling="no"
	    allowfullscreen="true">
	</iframe>
</div>

@stop