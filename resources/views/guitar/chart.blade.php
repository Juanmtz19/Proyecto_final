@extends('layouts.dashboard')



@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Ventas
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container1"></div>
    <p class="highcharts-description">
        Existencias
    </p>
</figure>

<script type="text/javascript">
var guitars = <?php echo json_encode($guitars)?>;

Highcharts.chart('container1', {
    chart: {
        type: 'area'

    },
    title: {
        text: 'Guitarras'

    },
    subtitle: {

        name: 'Nuevas Guitarras'
    },
    xAxis: {

        categories: ['Yamaha', 'Ibañez', 'Korg', 'Roland']
    },
    yAxis: {

        title: {
            text: 'Cantidad de ventas'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    plotOptions: {
        series: {
            allowPointSelect: true
        }
    },
    series: [{
        name: 'Guitarras',
        data: guitars
    }],
    responsive: {}

});
</script>


<!-- Nueva grafica -->

<script type="text/javascript">
var guitars2 = <?php echo json_encode($guitars2)?>;

Highcharts.chart('container2', {
    chart: {
        type: 'column'

    },
    title: {
        text: 'Guitarras'

    },
    subtitle: {

        name: 'Nuevas Guitarras'
    },
    xAxis: {

        categories: ['12 Docerola', ' 6 Acustica', ' 6 Electrica', ' 5 Electroacustica']
    },
    yAxis: {

        title: {
            text: 'Cantidad Disponibles'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    plotOptions: {
        series: {
            allowPointSelect: true
        }
    },
    series: [{
        name: 'Guitarras',
        data: guitars2
    }],
    responsive: {}

});
</script>



@endsection