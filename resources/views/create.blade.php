@extends('parent')

@section('main')

@if ($errors->any())

	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@andif

<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>


<form method="post" action="{{ route(crud.store) }}" enctype="multipart/form-data">

	@csrf
	
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" class="form-control input-lg" />	
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" class="form-control input-lg" />	
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Company Name</label>
		<div class="col-md-8">
			<input type="text" name="company" class="form-control input-lg" />	
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 text-right">Enter Email</label>
		<div class="col-md-8">
			<input type="text" name="email" class="form-control input-lg" />	
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 text-right">Enter Phone Number</label>
		<div class="col-md-8">
			<input type="nummber" name="phone" class="form-control input-lg" />	
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />	
		</div>
	</div>

	<div class="form-group text-center">
			<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />	
	</div>
	
</form>

@endsection

