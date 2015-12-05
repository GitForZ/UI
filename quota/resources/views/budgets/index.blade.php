@extends('app')
@section('content')
    <div class="jumbotron">
<h1>Budgets</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
    @for ($i = 0; $i < count($budgets); $i++)
        <div class ="body">
            <a href="{{ url('/budgets',$budgets[$i]->id) }}"><h3>Budget for {{$array[$i]}}</h3></a>
        </div>
        <!--
        This is the array of balances you can use for line graph
        {{$array_balances[$i]}}
                -->
    @endfor
        </div>
    </div>

    <br>
{!! Form::open(['url' => "budgets/create", 'method' => 'GET'] ) !!}
{!! Form::submit('Create', ['class'=>'btn btn-success btn-mini']) !!}
{!! Form::close() !!}


@stop

