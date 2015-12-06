@extends('app')
@section('content')
    <style>
        .fa-stack:hover {
            color: whitesmoke;
        }
    </style>
    <div class="jumbotron">
<h1>{{$todayNice}}</h1>
        <h2>Balance: ${{$budget->balance}}</h2>
    </div>
    <div class="row">
        <div class="col-md-4">


            <table class="table" >
                <thead>
                <tr>
                    <th>Expenses</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Housing:</td>
                    <td>${{$budget->housing}}</td>
                </tr>
                <tr>
                    <td>Utilities:</td>
                    <td>${{$budget->utilities}}</td>
                </tr>
                <tr>
                    <td>Food:</td>
                    <td>${{$budget->food}}</td>
                </tr>
                <tr>
                    <td>Debt:</td>
                    <td>${{$budget->debt}}</td>
                </tr>
                <tr>
                    <td>Transportation:</td>
                    <td>${{$budget->transportation}}</td>
                </tr>
                <tr>
                    <td>Fun:</td>
                    <td>${{$budget->fun}}</td>
                </tr>
                </tbody>
            </table>
        </div>


        <div class="col-md-4">
            <table class="table">
                <thead>
                <tr>
                    <th>Monthly Summary</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Monthly income:</td>
                    <td>${{$budget->income}}</td>
                </tr>
                <tr>
                    <td>Monthly expenses:</td>
                    <td>${{$expenses}}</td>
                </tr>
                <tr>
                    <td>Net income:</td>
                    <td>${{$net}}</td>
                </tr>
                <tr>
                    <td>Net balance:</td>
                    <td>${{$newBalance}}</td>
                </tr>
                </tbody>
            </table>
            <div style="float: right">
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
        </div>

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
                <!--income.draw(data, options);-->
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
            <!--expenses.draw(data, options);-->
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
            <!--monthly.draw(data, options);-->
            }
        </script>
    </div>
    <div class="tables">
    <div id="income_div"
         style="display:inline; float: left; padding-right: 10px;">
    </div>
    <div id="expenses_div" style="display:inline; float: left; padding-right: 10px"></div>
    <div id="monthly_div" style="display:inline; float: left; padding-right: 10px"></div>
        <div id="buttons" style="display:inline; float: left; padding-right: 10px">
            {!! Form::open(['url' => "budgets/$budget->id/edit", 'method' => 'GET'] ) !!}
            {!! Form::submit('Edit', ['class'=>'btn btn-success btn-mini','style'=>'max-width:50']) !!}
            {!! Form::close() !!}

            {!! Form::open(['action' => ['BudgetController@destroy', $budget->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-mini','style'=>'max-width:50']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@stop

