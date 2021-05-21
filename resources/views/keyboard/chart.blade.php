@extends('layouts.dashboard')

@section ('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Clasificación de ventas
  </p>
</figure>

<figure class="highcharts-figure">
  <div id="container2"></div>
  <p class="highcharts-description">
    Casa del teclado Tepeaca Puebla
  </p>
</figure>



<script type="text/javascript">

var keyboards = <?php echo json_encode($keyboards)?>;

Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
      text: 'Teclados'

  },
  subtitle: {

      name: 'Nuevas Marcas'
  },
  xAxis: {

      categories: ['Yamaha', 'Casio', 'Korg','Roland', 'M-Audio', 'Carbono']
  },
  yAxis: {

      title:{ 
          text: 'Registro de ventas'
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
      name: 'Ventas de Teclados',
      data: keyboards
  }],
  responsive: {}

});
</script>


<script type="text/javascript">

var keyboards2 = <?php echo json_encode($keyboards2)?>;

Highcharts.chart('container2', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
      text: 'Teclados existentes'

  },
  subtitle: {

      name: 'Marcas de Teclados'
  },
  xAxis: {

      categories: ['Enero', 'Febrero', 'Marzo', 'Abril' , 'Mayo', 'Junio', 'Julio']
  },
  yAxis: {

      title:{ 
          text: 'Existentes'
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
      name: 'Fallidos',
      data: keyboards2
  }],
  responsive: {}

});
</script>

@endsection