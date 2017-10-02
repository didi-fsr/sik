@extends('layouts.admin_dashboard')

@section('page_heading')
 <h1 class="page-header">Role Management
    {{-- @permission('role-create') --}}

     <a class="btn btn-success pull-right" href="{{ url('roles.create') }}"> Create New Role</a>

    {{-- @endpermission --}}
 </h1>

@endsection

@section('section')

  	@if ($message = Session::get('success'))

  		<div class="alert alert-success">

  			<p>{{ $message }}</p>

  		</div>

  	@endif

  	<table class="table table-bordered">

  		<tr>

  			<th>No</th>

  			<th>Name</th>

  			<th>Description</th>

  			<th width="280px">Action</th>

  		</tr>

  	@foreach ($roles as $key => $role)

  	<tr>

  		<td>{{ ++$i }}</td>

  		<td>{{ $role->display_name }}</td>

  		<td>{{ $role->description }}</td>

  		<td>

  			<a class="btn btn-info btn-xs" href="{{ route('roles.show',$role->id) }}">Show</a>

  			{{-- @permission('role-edit') --}}

  			<a class="btn btn-primary btn-xs" href="{{ route('roles.edit',$role->id) }}">Edit</a>

  			{{-- @endpermission --}}

  			{{-- @permission('role-delete') --}}

  			{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

          	{!! Form::close() !!}

          	{{-- @endpermission --}}

  		</td>

  	</tr>

  	@endforeach

  	</table>

  	{!! $roles->render() !!}

@stop
