@extends('app')

@section('content')


<h1>Budgets</h1>



    @for ($i = 0; $i < count($budgets); $i++)
        <div class ="body">
            <a href="{{ url('/budgets',$budgets[$i]->id) }}"><h3>Budget:{{$array[$i]}}</h3></a>
        </div>
    @endfor
    

@stop

