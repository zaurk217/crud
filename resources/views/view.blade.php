@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>	
	<img src="{{ URL::to('/') }}/images/{{ $data->images }}" class="img-thumbnail" />
	<h3>First Name - {{ $data->first_name }} </h3>
	<h3>Last Name - {{ $data->last_name }} </h3>
	<h3>Company - {{ $data->company }} </h3>
	<h3>Email - {{ $data->email }} </h3>
	<h3>Phone - {{ $data->phone }} </h3>
</div>



@endsection