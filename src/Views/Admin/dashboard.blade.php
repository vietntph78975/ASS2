@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row ">
    <div class="col-lg-12 card_height_100 mb_20">
        <div class="white_card">
            <div class="white_card_body p-0">
                <div class="card_container">
                    <div id="myChart" style="width:100%; max-width:600px; height:500px;">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            let $dashboards = JSON.parse('{!! json_encode($dashboards) !!}');
            
            // Set Data
            const data = google.visualization.arrayToDataTable($dashboards);
            // Set Options
            const options = {
                title: 'World Wide Wine Production'
            };
            // Draw
            const chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
@endsection