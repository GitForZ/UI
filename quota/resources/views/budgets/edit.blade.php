@extends('app')

@section('content')
<div class="container">
    <div class="jumbotron">
    <h2>Edit: {{$budget->title}}</h2>
    </div>

    {!! Form::model($budget,['method' => 'PATCH', 'action' => ['BudgetController@update', $budget->id]]) !!}
        @include ('budgets._form', ['submitButtonText' => 'Update Budget','setTitle'=>null])
    {!! Form::close() !!}

    @include('errors.list')
</div>
@stop