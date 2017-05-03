@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">

		<div class="col-sm-8">
			<div class="row">
				<div class="col-sm-12">
					<iframe width="100%" height="500px" src="https://www.youtube.com/embed/B5oQYEo4uB4" frameborder="0" allowfullscreen></iframe>
					<div class="g-ytsubscribe" data-channel="BracketStudio" data-layout="full" data-count="default"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h2>A Playground</h2>
					<p>Bootply is a playground for Bootstrap. Designers and developers use Bootply to edit, design, prototype, test and find examples that use Bootstrap 3. Use Bootply to hand-code HTML, Javascript, CSS and drop in the Bootstrap classes. There is a also a visual drag-and-drop builder that is perfect for wire-framing and mockups.</p>
				</div>
			</div>		<hr>	
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
				The new Bootstrap 3 is a smaller build. The separate Bootstrap base and responsive.css files have now been merged into one. There is no more fixed grid, only fluid..
			</div>
			<div class="well text-center">
				<h3>Support Us</h3>
				<a href="https://www.patreon.com/bracketstudio:"><img src="/img/patreon.png" alt="patreon" width="100%"></a>
			</div>
		</div>

	</div>
</div>
@stop