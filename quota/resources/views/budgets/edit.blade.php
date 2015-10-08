@extends('app')

@section('content')

    <h1>Edit {!! $todayNice !!}</h1>

    {!! Form::model($budget,['method' => 'PATCH', 'action' => ['BudgetController@update', $budget->id]]) !!}
        @include ('budgets._form', ['submitButtonText' => 'Update Budget']);
    {!! Form::close() !!}

    @include('errors.list')

@stop