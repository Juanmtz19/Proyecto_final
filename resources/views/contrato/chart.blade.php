@extends('layouts.dashboard')

@section('content')



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Fechas disponibles
  </p>
</figure>

<figure class="highcharts-figure">
  <div id="container2"></div>
  <p class="highcharts-description">
   Fechas ocupadas
  </p>
</figure>

<script type="text/javascript">

var contratos = <?php echo json_encode($contratos)?>;

Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
      text: 'Fechas Disponibles'

  },
  subtitle: {

      name: 'Nuevas Fechas'
  },
  xAxis: {

      categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto',
      'Septiembre', 'Octubre', 'Noviembre','Diembre']
  },
  yAxis: {

      title:{ 
          text: 'Fechas ocupadas'
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
      name: 'Fechas ocupadas',
      data: contratos
  }],
  responsive: {}

});
</script>


<script type="text/javascript">

var contratos2 = <?php echo json_encode($contratos2)?>;

  Highcharts.chart('container2', {
  chart: {
    type: 'column'
  },
  title: {
      text: 'Nuevos contratos'

  },
  subtitle: {

      name: 'Fechas ocupadas'
  },
  xAxis: {

      categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto',
      'Septiembre', 'Octubre', 'Noviembre','Diembre']
  },
  yAxis: {

      title:{ 
          text: 'Fechas disponibles'
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
      name: 'Fechas disponibles',
      data: contratos2
  }],
  responsive: {}

});
</script>



@endsection