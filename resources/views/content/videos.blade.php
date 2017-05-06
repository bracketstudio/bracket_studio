@extends('layouts.master')

@section('content')

<div class="col-sm-12">
	<h1 class="text-center">Here we have our 100 most recently posted videos!</h1>
	<div class="video-container">
		<iframe 
			src="https://www.youtube.com/embed/videoseries?list=UU4jIPpJtuejO8NZGTM3xKjA" 
			frameborder="0" 
			allowfullscreen="true">		
			</iframe>
	</div>
	<div class="playlists text-center">
		<h3>Other Playlists</h3>
		<article class="col-md-4">
			<a href="https://www.youtube.com/watch?v=X_IhLoDjbFA&list=PLnKHfRzQm6Y8KcuFU4_8Xj6gpFhk5ckW7" target="_blank"><h1>Gang Beasts</h1></a>
		</article>
	
		<article class="col-md-4">
			<a href="https://www.youtube.com/watch?v=W9RFN6pFn1o&list=PLnKHfRzQm6Y_sQ4GfzYwBJqdQAF_WvdQZ" target="_blank"><h1>Overwatch</h1></a>
		</article>
	
		<article class="col-md-4">
			<a href="https://www.youtube.com/watch?v=bsX-d9At4C0&list=PLnKHfRzQm6Y-7R4UPRSHyd-5_nNPPINFW" target="_blank"><h1>Minecraft</h1></a>
		</article>
	
		<article class="col-md-4">
			<a href="https://www.youtube.com/watch?v=LCvXBFxPAhw&list=PLnKHfRzQm6Y9XtNOD0le9GU6SfFS8FAkx" target="_blank"><h1>Resident Evil 7: Biohazard</h1></a>
		</article>
	
		<article class="col-md-4">
			<a href="https://www.youtube.com/watch?v=Hp6kxdnwVAg&list=PLnKHfRzQm6Y-tlqnLXs2yjhqAp8TZ22S6" target="_blank"><h1>Super Smashed Bros.</h1></a>
		</article>
	
		<article class="col-md-4">
			<a href="https://www.youtube.com/watch?v=_JaEyueNjSY&list=PLnKHfRzQm6Y-CWIkHWdAyScKJdIWadg2x" target="_blank"><h1>Rockband</h1></a>
		</article>	
	</div>
</div>
@stop