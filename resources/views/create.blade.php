@extends('parent')

@section('main')

@if($errors->any())

	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>


<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	
	<div class="form-group col-md-8">
		<label for="exampleInputEmail1">Enter First Name</label>
			<input type="text" name="first_name" class="form-control input-lg" />	
	</div>
	
	<div class="form-group col-md-8">
		<label for="exampleInputEmail1">Enter Last Name</label>
			<input type="text" name="last_name" class="form-control input-lg" />	
	</div>
	
	<div class="form-group col-md-8">
		<label for="exampleInputEmail1">Enter Company Name</label>
			<input type="text" name="company" class="form-control input-lg" />	
	</div>

	<div class="form-group col-md-8">
		<label for="exampleInputEmail1">Enter Email</label>
			<input type="text" name="email" class="form-control input-lg" />	
	</div>

	<div class="form-group col-md-8">
		<label for="exampleInputEmail1">Enter Phone Number</label>
			<input type="number" name="phone" class="form-control input-lg" />	
	</div>

	<div class="form-group col-md-8">
		<label for="exampleFormControlFile1">Select Profile Image</label>
			<input type="file" name="image" />	
	</div>

	<div class="form-group text-center">
			<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />	
	</div>
	
</form>

@endsection

