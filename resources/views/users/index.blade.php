@extends('layouts.admin_dashboard')

@section('page_heading')
 <h1 class="page-header">Users Management <a class="btn btn-success pull-right" href="{{ route('users.create') }}"> Create New User</a></h1>

@endsection

@section('section')


	@if ($message = Session::get('success'))

		<div class="alert alert-success">

			<p>{{ $message }}</p>

		</div>

	@endif

	<table class="table table-striped">

		<tr>

			<th>No</th>

			<th>Name</th>

			{{-- <th>Email</th> --}}

			<th>Roles</th>

			<th width="280px">Action</th>

		</tr>

	@foreach ($data as $key => $user)

	<tr>

		<td>{{ ++$i }}</td>

		<td>{{ $user->name }}</td>

		{{-- <td>{{ $user->email }}</td> --}}

		<td>

			@if(!empty($user->roles))

				@foreach($user->roles as $v)

					<label class="label label-success">{{ $v->display_name }}</label>

				@endforeach

			@endif

		</td>

		<td>

			{{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> --}}

			<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

			{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

        	{!! Form::close() !!}

		</td>

	</tr>

	@endforeach

	</table>

	{!! $data->render() !!}

@stop
