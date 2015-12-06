@extends('app')

@section('content')

	<div class="container">

<div class="jumbotron">
<h2>Create a New Budget</h2>
</div>
<hr>


{!! Form::open(['url' => 'budgets']) !!}
	@include ('budgets._form', ['submitButtonText' => 'Add Budget','setTitle'=>'Budget for ' . date('Y-m-d')])
{!! Form::close() !!}

@include('errors.list')
	</div>
@stop
