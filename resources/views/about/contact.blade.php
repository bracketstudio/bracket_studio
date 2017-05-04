@extends('layouts.master')

@section('content')
<h1 class="text-center">[CONTACT US]</h1>

<form method="POST">
	{!!csrf_field()!!}
	<div class="form-group">
		<label>Name</label>
		<input class="form-control" type="" name="">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" type="" name="">
	</div>
	<div class="form-group">
		<label>Phone Number</label>
		<input class="form-control" type="" name="">
	</div>
	<div class="form-group">
		<label>Message</label>
		<textarea class="form-control" type="" name=""></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-danger">Send</button>
	</div>
</form>

@stop