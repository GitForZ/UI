@extends('app')

@section('content')

    <div class="jumbotron">
    <h1>Edit {!! $todayNice !!}</h1>
    </div>

    {!! Form::model($budget,['method' => 'PATCH', 'action' => ['BudgetController@update', $budget->id]]) !!}
        @include ('budgets._form', ['submitButtonText' => 'Update Budget'])
    {!! Form::close() !!}

    @include('errors.list')

@stop