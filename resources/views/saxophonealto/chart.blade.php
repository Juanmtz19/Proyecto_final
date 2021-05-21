@extends('layouts.dashboard')

@section ('content')

<!--
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
-->
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Casa Ibañez
    </p>
</figure>


<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Ciudad de Puebla
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Ciudad de Puebla
    </p>
</figure>

<script type="text/javascript">
var saxophonealtos = <?php echo json_encode($saxophonealtos)?>;

Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Saxofones'

    },
    subtitle: {

        name: 'Nuevas marcas'
    },
    xAxis: {

        categories: ['Yamaha', 'King', 'Mercuri', 'Roland', 'Silvertone', 'Jupiter']
    },
    yAxis: {

        title: {
            text: 'Cantidad de piezas'
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
        name: 'Envios de teclados',
        data: saxophonealtos
    }],
    responsive: {}

});
</script>


<script type="text/javascript">
var saxophonealtos3 = <?php echo json_encode($saxophonealtos3)?>;

Highcharts.chart('container3', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Saxofones disponibles'

    },
    subtitle: {

        name: 'Tipos de saxofones'
    },
    xAxis: {

        categories: ['Saxofón alto Disponibles 17879', 'Saxofón tenor Disponibles 9098',
            'Safoxón batitono Disponibles 89878', 'Saxofon soprano Disponibles 77678',
            'Saxofón alto mayor 87565'
        ]
    },
    yAxis: {

        title: {
            text: 'Número de piezas'
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
        name: 'Existentes',
        data: saxophonealtos3
    }],
    responsive: {}

});
</script>

<script type="text/javascript">
var saxophonealtos2 = <?php echo json_encode($saxophonealtos2)?>;

Highcharts.chart('container2', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Saxofones disponibles'

    },
    subtitle: {

        name: 'Tipos de saxofones'
    },
    xAxis: {

        categories: ['Saxofón alto', 'Saxofón tenor', 'Safoxón batitono', 'Saxofon soprano',
            'Saxofón alto mayor'
        ]
    },
    yAxis: {

        title: {
            text: 'Número de piezas'
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
        name: 'Existentes',
        data: saxophonealtos2
    }],
    responsive: {}

});
</script>

@endsection