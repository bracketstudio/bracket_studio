@extends('layouts.master')

@section('content')
<h1 class="text-center">[CONTACT US]</h1>
	<p class="text-center">We may be looking to expand our production team in the near future.</p>

	<p class="text-center">If you, or someone you know, has some experience and would like to become a part of our team, or if you just want to send us a message, feel free to contact us below!</p>


	<form name="sentMessage" id="contactForm" method="POST" novalidate>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="name">Name</label>
				<input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
				<p class="help-block text-danger"></p>
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="email">Email Address</label>
				<input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
				<p class="help-block text-danger"></p>
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="phone">Phone Number</label>
				<input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
				<p class="help-block text-danger"></p>
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="message">Message</label>
				<textarea rows="4" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
				<p class="help-block text-danger"></p>
			</div>
		</div>
		<br>
		<div id="success"></div>
		<div class="row">
			<div class="form-group col-xs-12">
				<button type="submit" class="btn btn-danger btn-lg">Send</button>
			</div>
		</div>
	</form>

@stop