@extends('app')
​
@section('content')
    <div class ="body">
        <head>
            <script type="text/javascript">
                google.load("visualization", "1", {packages:["corechart"]});
                google.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Category', 'Money'],
                        ['Housing', {{$budget->housing}} ],
                        ['Utilities', {{$budget->utilities}}],
                        ['Food', {{$budget->food}}],
                        ['Debt', {{$budget->debt}} ],
                        ['Transportation', {{$budget->transportation}}],
                        ['Fun', {{$budget->fun}}]
                    ]);
                    var options = {
                        title: 'Expenses',
                        titleTextStyle: {color: 'white'},
                        is3D: true,
                        'chartArea': {'width': '100%', 'height': '80%'},
                        font:{color: 'white'},
                        backgroundColor: '#272B30',
                        legend: {textStyle: {color: 'white'}}
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                    chart.draw(data, options);
                }
            </script>
        </head>
        <body>
        <div class="row">
            <div class="col-md-6">
        <div id="piechart_3d" style="width: 100%; height: 70%;"></div>
            </div>
        </div>
        </body>
    </div>
@stop