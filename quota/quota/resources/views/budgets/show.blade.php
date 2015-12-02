@extends('app')
@section('content')
    <style>
        .fa-stack:hover {
            color: whitesmoke;
        }
    </style>
<h1>{{$todayNice}}</h1>
    <!-- Testing-->
    <table class="table">
        <thead>
        <tr>
            <th>Income</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Balance:</td>
            <td>{{$budget->balance}}</td>
        </tr>
        <tr>
            <td>Monthly Income:</td>
            <td>{{$budget->income}}</td>
        </tr>
        </tbody>
    </table>
    <!-- Testing
    <div style="float: right">

        <a href="" target="_blank" style="color: deepskyblue;">
        <span class="fa-stack fa-2x">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-line-chart fa-stack-1x"></i>
        </span>
        </a>

        <a href="{{ url('/budgets/pie_graph',$budget->id) }}" target="_blank" style="color: deepskyblue;">
        <span class="fa-stack fa-2x">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-pie-chart fa-stack-1x"></i>
        </span>
        </a>

        <a href="{{ url('/budgets/bar_graph',$budget->id) }}" target="_blank" style="color: deepskyblue;">
        <span class="fa-stack fa-2x">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-bar-chart fa-stack-1x"></i>
        </span>
        </a>

    </div>
    <div>
        <script type="text/javascript">
            google.load("visualization", "1.1", {packages:["table"]});
            google.setOnLoadCallback(drawTable);
            google.setOnLoadCallback(drawTable2);
            google.setOnLoadCallback(drawTable3);
            function drawTable() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Income');
                data.addColumn('number', '');
                data.addRows([
                    ['Balance: ', {{$budget->balance}}],
                    ['Income: ', {{$budget->income}}]
                ]);
                var options = {showRowNumber: false, allowHtml: true, width: '200px', height: '30%'};
                var income = new google.visualization.Table(document.getElementById('income_div'));
                income.draw(data, options);
            }
            function drawTable2() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Expenses');
                data.addColumn('number', '');
                data.addRows([
                    ['Housing:', {{$budget->housing}} ],
                    ['Utilities:', {{$budget->utilities}}],
                    ['Food:', {{$budget->food}}],
                    ['Debt:', {{$budget->debt}} ],
                    ['Transportation:', {{$budget->transportation}}],
                    ['Fun:', {{$budget->fun}}],
                    ['Total:', {{$expenses}}]
                ]);
                var options = {showRowNumber: false, allowHtml: true, width: '200px', height: '50%'};
                var expenses = new google.visualization.Table(document.getElementById('expenses_div'));
                expenses.draw(data, options);
            }
            function drawTable3() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Monthly Summary');
                data.addColumn('number', '');
                data.addRows([
                    ['Net Income:', {{$net}} ],
                    ['New Balance:', {{$newBalance}}]
                ]);
                var options = {showRowNumber: false, allowHtml: true, width: '200px', height: '30%'};
                var monthly = new google.visualization.Table(document.getElementById('monthly_div'));
                var formatter = new google.visualization.ColorFormat();
//                formatter.addRange(-20000, 0, 'white', 'orange');
//                formatter.addRange(20000, null, 'red', '#33ff33');
//                formatter.format(data, 1); // Apply formatter to second column
                monthly.draw(data, options);
            }
        </script>
    </div>
    <h2> Budget: </h2>
    <div class="tables">
    <div id="income_div"
         style="display:inline; float: left; padding-right: 10px;">
    </div>
    <div id="expenses_div" style="display:inline; float: left; padding-right: 10px"></div>
    <div id="monthly_div" style="display:inline; float: left; padding-right: 10px"></div>
        <div id="buttons" style="display:inline; float: left; padding-right: 10px">
            {!! Form::open(['url' => "budgets/$budget->id/edit", 'method' => 'GET'] ) !!}
            {!! Form::submit('Edit', ['class'=>'btn btn-success btn-mini']) !!}
            {!! Form::close() !!}

            {!! Form::open(['action' => ['BudgetController@destroy', $budget->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-mini']) !!}
            {!! Form::close() !!}
        </div>
    </div>
-->


@stop

