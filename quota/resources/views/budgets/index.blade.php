@extends('app')
@section('content')
    <div class="jumbotron">
<h1>Budgets</h1>
    </div>
    @for ($i = 0; $i < count($budgets); $i++)
        <div class ="body">
            <a href="{{ url('/budgets',$budgets[$i]->id) }}"><h3>Budget for {{$array[$i]}}</h3></a>
        </div>
    @endfor

{!! Form::open(['url' => "budgets/create", 'method' => 'GET'] ) !!}
{!! Form::submit('Create', ['class'=>'btn btn-success btn-mini']) !!}
{!! Form::close() !!}
    

@stop

