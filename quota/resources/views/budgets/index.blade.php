@extends('app')
@section('content')
    <div class="jumbotron">
<h1>Budgets</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            @for ($i = 0; $i < count($budgets); $i++)
                <div class ="body">
                    <a href="{{ url('/budgets',$budgets[$i]->id) }}"><h3>Budget for {{$array[$i]}}-{{$i}}</h3></a>

                    {{--<h2>--}}
                    {{--{{$array_balances[$i]}}--}}
                    {{--</h2>--}}
                </div>
            @endfor
            <br>
                {!! Form::open(['url' => "budgets/create", 'method' => 'GET'] ) !!}
                {!! Form::submit('Create', ['class'=>'btn btn-success btn-mini']) !!}
                {!! Form::close() !!}
        </div>
        @if (count($budgets) > 1)
            <div class="col-md-8" style="float: right;">
                <script type="text/javascript">
                    google.load("visualization", "1.1", {packages:["corechart"]});
                    google.setOnLoadCallback(drawChart);
                    function drawChart() {
                        var data = new google.visualization.DataTable();
                        data.addColumn('number', 'Balance');
                        data.addColumn('number', 'Budget');
//                        data.addColumn('number', 'Housing');
//                        data.addColumn('number', 'Utilities');
//                        data.addColumn('number', 'Food');
//                        data.addColumn('number', 'Debt');
//                        data.addColumn('number', 'Transportation');
//                        data.addColumn('number', 'Fun');
                        {{--['Balances', 'Budgets'],--}}
                        data.addRows([
                            @for ($i = 0; $i < count($budgets); $i++)
                                [{{$i}}, {{$array_balances[$i]}}
                                {{--{{$budgets[$i]->housing}},--}}
                                {{--{{$budgets[$i]->utilities}},--}}
                                {{--{{$budgets[$i]->food}},--}}
                                {{--{{$budgets[$i]->debt}},--}}
                                {{--{{$budgets[$i]->transportation}},--}}
                                {{--{{$budgets[$i]->fun}}--}}
                                ],
                            @endfor
                        ]);
                        {{--var data = google.visualization.arrayToDataTable([--}}
                            {{--['Balances', 'Budgets'],--}}
                            {{--@for ($i = 0; $i < count($budgets); $i++)--}}
                                {{--[{{$i}}, {{$array_balances[$i]}}],--}}
                            {{--@endfor--}}
                        {{--]);--}}

                        var options = {
//                            title: 'Budgets',
                            titleTextStyle: {color: 'white'},
                            legend: 'none',
                            width: 900,
                            height: 500,
                            chartArea: {
                                left: "10%",
//                                right: "1%",
                                top: "3%",
                                height: "90%",
                                width: "100%"
                            },
                            curveType: 'function',
                            backgroundColor: '#272B30',
                            hAxis: {title: 'Budgets', titleTextStyle: {color: 'white'},
                                gridlines: {
                                    color: 'transparent'
                                },
                                textStyle: { color: 'white'}, minValue: 0, maxValue:{{count($budgets)}}},//ticks: []//for no lines
                            vAxis: {title: 'Balances', titleTextStyle: {color: 'white'},
                                gridlines: {
                                    color: 'transparent'
                                },
                                textStyle: { color: 'white'}},
                            lineWidth: 1,
                            pointShape: 'square',
                            pointSize: 15,
                            series: {
                                0: {color: 'white'},
//                                1: {color: 'black'},
//                                2: { color: 'blue' },
//                                3: { color: 'red' },
//                                4: { color: 'green' },
//                                5: { color: 'yellow' },
//                                6: { color: 'gray' },
//                                7: { color: 'orange' }
                            }
                        };

                        var chart = new google.visualization.ScatterChart(document.getElementById('chart_pointSize'));
//                        google.visualization.events.addListener(chart, 'ready', function () {
//                            chart_pointSize.innerHTML = '<img src="' + chart.getImageURI() + '">';
//                            console.log(chart_pointSize.innerHTML);
//                        });

                        chart.draw(data, options);
                    }
                </script>
                <div id="chart_pointSize"></div>
            </div>
        @endif
    </div>
@stop

