@extends('layouts.master')

@section('content')

<h2 class="text-center">[CAREERS]</h2>
	<p class="text-center">We may be looking to expand our production team in the near future.</p>
	<p class="text-center">If you, or someone you know, has some experience and would like to become a part of our team, feel free to contact us below!</p>

<form class="form-horizontal">
	<fieldset>
		<div class="form-group">
			<label for="first_name" class="col-sm-2 control-label">First Name *</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" id="name" name="name" placeholder="First Name" >
			</div>
		</div>
		<div class="form-group">
			<label for="last_name" class="col-sm-2 control-label">Last Name *</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" id="name" name="name" placeholder="Last Name" >
	  		</div>
		</div>

		<div class="form-group">
			<label for="select" class="col-sm-2 control-label">Age Group *</label>
			<div class="col-sm-2">
				<select class="form-control" id="select">
					<option>Youngen(younger than 18)</option>
					<option>Minor(18-20)</option>
					<option>Of Age(21+)</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email *</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
			</div>
		</div>

		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message *</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="3" id="message"></textarea>
			</div>
		</div>


		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
			<button type="submit" class="btn btn-danger">Submit</button>
			</div>
		</div>
	</fieldset>
</form>


@stop