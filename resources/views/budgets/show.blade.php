@extends('app')

@section('content')


<h1>{{$todayNice}}</h1>


	
<div class ="body"> 
 <h3> Budget: </h3>
   Housing: {{$budget->housing}} <br>
   Utilities: {{$budget->utilities}} <br>
   Food: {{$budget->food}} <br>
   Debt: {{$budget->debt}} <br>
   Transportation: {{$budget->transportation}} <br>
   Fun: {{$budget->fun}} <br>
</div>
    

    

@stop

