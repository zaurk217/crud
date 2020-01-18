@extends('parent')

@section('main')

<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
	
	@csrf
	@method('PATCH')

	<div class="form-group">
		<label class="col-md4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-md4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-md4 text-right">Enter Company Name</label>
		<div class="col-md-8">
			<input type="text" name="company" value="{{ $data->company }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-md4 text-right">Enter Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-md4 text-right">Enter Phone Number</label>
		<div class="col-md-8">
			<input type="number" name="phone" value="{{ $data->phone }}" class="form-control input-lg" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-md4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>

	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>

</form>

@endsection