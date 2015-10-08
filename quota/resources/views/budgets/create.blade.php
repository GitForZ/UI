@extends('app')

@section('content')



<h1>Create a New Budget</h1>

<hr>


{!! Form::open(['url' => 'budgets']) !!}
	@include ('budgets._form', ['submitButtonText' => 'Add Budget']);
{!! Form::close() !!}

@include('errors.list')

@stop
