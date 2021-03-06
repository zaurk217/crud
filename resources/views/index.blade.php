@extends('parent')

@section('main')

<div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>

</div>

@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif

	<table class="table table-bordered table-stripped">
		<tr>
			<th with="10%">Image</th>
			<th with="12%">First Name</th>
			<th with="12%">Last Name</th>
			<th with="12%">Company</th>
			<th with="12%">Email</th>
			<th with="12%">Phone</th>
			<th with="30%">Action</th>
		</tr>
		@foreach($data as $row)
			<tr>
				<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail with="75" /></td>
				<td>{{ $row->first_name  }}</td>
				<td>{{ $row->last_name  }}</td>
				<td>{{ $row->company  }}</td>
				<td>{{ $row->email  }}</td>
				<td>{{ $row->phone  }}</td>
				<td>

				<ul class="list-group">
					<li class="list-group-item"><a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a></li>
					<li class="list-group-item"><a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a></li>
					<li class="list-group-item"><form action="{{ route('crud.destroy', $row->id) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form></li>
				</td>
				</ul>
			</tr>
		@endforeach		
	</table>
	{!! $data->links() !!}

@endsection
