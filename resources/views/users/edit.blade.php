@extends('layouts.admin_dashboard')

@section('page_heading')
 <h1 class="page-header">Edit New User <a class="btn btn-primary pull-right" href="{{ route('users.index') }}"> Back</a></h1>

@endsection

@section('section')


  	@if (count($errors) > 0)

  		<div class="alert alert-danger">

  			<strong>Whoops!</strong> There were some problems with your input.<br><br>

  			<ul>

  				@foreach ($errors->all() as $error)

  					<li>{{ $error }}</li>

  				@endforeach

  			</ul>

  		</div>

  	@endif

  	{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

  	<div class="row">

  		<div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Name:</strong>

                  {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

              </div>

          </div>

          {{-- <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Email:</strong>

                  {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

              </div>

          </div> --}}

          <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Password:</strong>

                  {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

              </div>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Confirm Password:</strong>

                  {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

              </div>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Role:</strong>
                  <br/>

                  @foreach($roles as $value)

                    <label>{{ Form::checkbox('roles[]', $value->id, in_array($value->id, $userRole) ? true : false, array('class' => 'name')) }}
                      {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }} --}}

                    {{ $value->display_name }}</label>
                    {{-- @foreach ($rolePermissions as $element)
                      <label for="">{{$element}}</label>
                    @endforeach --}}

                    <br/>

                  @endforeach

                  {{-- {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!} --}}

              </div>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">

  				<button type="submit" class="btn btn-primary">Submit</button>

          </div>

  	</div>

  	{!! Form::close() !!}
@stop
