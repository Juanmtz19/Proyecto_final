@extends('layouts.dashboard')

@section('content')

<div class="">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-1">
                        <a class="btn btn-outline-info" href="{{ route('contrato.create') }}"><i
                                class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="col-md-7">
                        <h2 class="card-title">Contrataciones Artisticas Virtual Music</h2>
                    </div>
                    <div class="cold-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-online-info padding-left ml-2" href="{{url('/contrato/cards')}}"><i
                                    class="fas fa-border-all"></i></a>
                            <a class="btn btn-informa-info padding-left ml-2" href="{{url('/contrato/chart')}}"><i
                                    class="fas fa-chart-bar"></i></a>
                            <a class="btn btn-online-info  mr-2" href="{{url ('/contrato/exportToXlsx')}}"><i
                                    class="fas fa-file-excel"></i> </a>
                            <span onclick="exportContrato(event.target)" data-href="/exportToCSV" id="export"
                                class="btn btn-outline-info">
                                <i class="fas fa-file-csv"></i></span>
                                <a class="btn btn-online-info padding-left ml-2" href="{{url('/contrato/index2')}}"><i
                                    class="fas fa-table"></i></a>
                            <a class="btn btn-online-info mr-2" href="{{url('/contrato/import')}}"><i
                                    class="fas fa-file-import"></i></a>
                            <a href="{{route('contrato.create')}}"><i class="fa fas-add"></i>Registro Nuevo</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table id="example" class="table table-striped">

                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Artistas</th>
                            <th>Fechas</th>
                            <th>Lugar</th>
                            <th>Ventas de entradas</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($contrato as $contratos)
                        <tr>
                        <td>
                                <img style="height: 100px; width: 200px; object-fit: cover;"
                                    src="/imagenes/contrato/{{ $contratos->image }}"
                                    alt="{{ $contratos->brand }} {{ $contratos->model }}" />
                            </td>
                            <td>
                                <a class="btn btn-info btn-small" href="{{ route ('contrato.show', $contratos->id)}}">
                                    <h4>{{$contratos->grup}} {{$contratos->grup2}}</h4>
                            </td>
                            </a>
                            <td>

                                <p><b>Fecha de evento:</b>{{$contratos->eventName}}</p>
                                <p><b>Ciudad:</b>{{$contratos->city}}</p>
                                <p><b>Plaza:</b>{{$contratos->place}}</p>
                                <p><b>Fecha:</b>{{$contratos->date}}</p>
                                <p><b>Capacidad:</b>{{$contratos->capacity}}</p>
                                <p><b>Entrada:</b>{{$contratos->payment}}</p>
                            </td>
                            <td>
                                <p>{{$contratos->description}}</p>
                            </td>

                        </tr>
                    </tbody>



                    @empty
                    <h1>No existen registros</h1>

                    @endforelse

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- DataTables -->
<script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>


<!-- Aplicación de DataTable -->
<script>
    $(function() {
        $('#example').DataTable ({
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'exel', 'pdf', 'print'
        ]
        });
    });
</script>

    <script>
    
    function exportContrato(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
    </script>


    @endsection