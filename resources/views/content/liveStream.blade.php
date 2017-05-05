@extends('layouts.master')

@section('content')
<script src= "http://player.twitch.tv/js/embed/v1.js"></script>
<div id="<player div ID>"></div>

<h1>Twitch Live Stream</h1>
<iframe 
	src="https://player.twitch.tv/?channel=bracketstudio" 
	frameborder="0" allowfullscreen="true" 
	scrolling="no" height="500" width="620"></iframe>
<iframe src="https://www.twitch.tv/bracketstudio/chat?popout=" frameborder="0" scrolling="no" height="500" width="350"></iframe>


@stop