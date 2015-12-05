@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
	<div class="jumbotron">
		<h1>WhatsMyQuota</h1>
		<p>WhatsMyQuota is a web application that will help you manage your budgets
		   and stay on top of your finances. With our app you can create multiple budgets,
		   edit them at anytime, and view a report on each budget for their corresponding month.
		   Sign up for free and get started today!</p>
	</div>
	</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
							{!! Form::label('email', 'Email:') !!}<br>
							{!! Form::text('email', Input::old('email'), ['class' => 'form-control'])!!}
								</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
							{!! Form::label('password', 'Password:') !!}<br>
								{!! Form::password('password', ['class' => 'form-control']) !!}
								</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>




					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
