@extends('app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Register</div>
					<div class="panel-body">
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

						<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<div class="col-md-4">
									{!! Form::label('name', 'Name:') !!}<br>
								</div>
								<div class="col-md-6">
									{!! Form::text('name', Input::old('name'), ['class' => 'form-control'])!!}
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-4">
									{!! Form::label('email', 'Email:') !!}<br>
								</div>
								<div class="col-md-6">
									{!! Form::text('email', Input::old('email'), ['class' => 'form-control'])!!}
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-4">
									{!! Form::label('password', 'Password:') !!}<br>
								</div>
								<div class="col-md-6">
									{!! Form::password('password', ['class' => 'form-control'])!!}
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-4">
									{!! Form::label('password', 'Confirm Password:') !!}<br>
								</div>
								<div class="col-md-6">
									{!! Form::password('password_confirmation', ['class' => 'form-control'])!!}
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Register
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
