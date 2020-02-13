@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
	</div>	
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<hr class="my-4" />
	<h3>First Name: - {{ $data->first_name }} </h3>
	<h3>Last Name: - {{ $data->last_name }} </h3>
	<h3>Company: - {{ $data->company }} </h3>
	<h3>Email: - {{ $data->email }} </h3>
	<h3>Phone: - {{ $data->phone }} </h3>
</div>



@endsection
