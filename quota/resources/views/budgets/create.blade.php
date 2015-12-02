@extends('app')

@section('content')


<div class="jumbotron">
<h1>Create a New Budget</h1>
</div>
<hr>


{!! Form::open(['url' => 'budgets']) !!}
	@include ('budgets._form', ['submitButtonText' => 'Add Budget'])
{!! Form::close() !!}

@include('errors.list')

@stop
