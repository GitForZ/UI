@extends('app')

@section('content')
    <div class ="container">
        <head>
            <script type="text/javascript">
                google.load("visualization", "1", {packages:["corechart"]});
                ////////////////////////////////////////////////////////////////////
                function initialize() {
                    var opts = {sendMethod: 'auto'};
                    // Replace the data source URL on next line with your data source URL.
                    var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1vajOxUKDhtmU-E6MWOcEywZ7YZn_VJh0USbQew1HlZQ/edit#gid=0&vpid=A1', opts);
                    // Send the query with a callback function.
                    query.send(handleQueryResponse);
                }

                function handleQueryResponse(response) {
                    if (response.isError()) {
                        alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
                        return;
                    }
                    var data = response.getDataTable();
                    var options = {
                        title: 'Company Performance'
                    };
                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }

                /////////////////////////////////////////////////////////////////////
                google.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ["Category", "Value", { role: "style" } ],
                        ['Housing:', {{$budget->housing}}, 'red'],
                        ['Utilities:', {{$budget->utilities}}, 'orange'],
                        ['Food:', {{$budget->food}}, 'yellow'],
                        ['Debt:', {{$budget->debt}}, 'green'],
                        ['Transportation:', {{$budget->transportation}}, 'blue'],
                        ['Fun:', {{$budget->fun}}, 'purple'],
                    ]);
                    var view = new google.visualization.DataView(data);
//                    view.setColumns([0, 1,
//                        { calc: "stringify",
//                            sourceColumn: 1,
//                            type: "string",
//                            role: "annotation" },
//                        2]);
                    var options = {
                        title: "Budget",
                        titleTextStyle: {color: 'white'},
                        width: 900,
                        height: 500,
                        backgroundColor: '#272B30',
                        bar: {groupWidth: "75%"},
                        legend: { position: "none" },
                        hAxis: { textStyle: { color: 'white', fontName: 'Arial', fontSize: '12', paddingRight: '105', marginRight: '100'} },
                        vAxis: { textStyle: { color: 'white', fontName: 'Arial', fontSize: '14', paddingRight: '105', marginRight: '100'} },
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                    chart.draw(view, options);
                }
            </script>
        </head>
        <body><div id="columnchart_values" style="width: 100%; height: 100%;"></div></body>
    </div>
@stop