@extends('layouts.dashboard')

@section('content')

<div class="">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-1">
                        <a class="btn btn-outline-info" href="{{ route('guitar.create') }}"><i
                                class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="col-md-7">
                        <h2 class="card-title">Marcas Existentes de Guitarra</h2>
                    </div>
                    <div class="cold-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-online-info padding-left ml-2" href="{{url('/guitar/index2')}}"><i
                                    class="fas fa-table"></i></a>
                            <a class="btn btn-online-info padding-left ml-2" href="{{url('/guitar/cards')}}"><i
                                    class="fas fa-border-all"></i></a>
                            <a class="btn btn-informa-info padding-left ml-2" href="{{url('/guitar/chart')}}"><i
                                    class="fas fa-chart-bar"></i></a>
                            <a class="btn btn-online-info  mr-2" href="{{url ('/guitar/exportToXlsx')}}"><i
                                    class="fas fa-file-excel"></i> </a>
                            <span onclick="exportGuitar(event.target)" data-href="/exportToCSV" id="export"
                                class="btn btn-outline-info">
                                <i class="fas fa-file-csv"></i></span>
                            <a class="btn btn-online-info mr-2" href="{{url('/guitar/import')}}"><i
                                    class="fas fa-file-import"></i></a>
                            <a href="{{route('guitar.create')}}"><i class="fa fas-add"></i>Registro Nuevo</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table id="example" class="table table-striped">

                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Guitarras</th>
                            <th>Marcas</th>
                            <th>Modelos</th>
                            <th>Recomendaciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($guitar as $guitars)
                        <tr>
                            <td>
                                <img style="height: 100px; width: 200px; object-fit: cover;"
                                    src="/imagenes/guitar/{{ $guitars->image }}"
                                    alt="{{ $guitars->brand }} {{ $guitars->model }}" />
                            </td>
                            <td>
                                <a class="btn btn-info btn-small" href="{{ route ('guitar.show', $guitars->id)}}">
                                    <h4>{{$guitars->brand}} {{$guitars->model}}</h4>
                            </td>
                            </a>
                            <td>

                                <p><b>Española:</b>{{$guitars->spanish}}</p>
                                <p><b>Clasica:</b>{{$guitars->classic}}</p>
                                <p><b>Numero:</b>{{$guitars->number}}</p>
                                <p><b>Marca:</b>{{$guitars->model}}</p>
                            </td>
                            <td>
                                <p>{{$guitars->description}}</p>
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

    <!-- Datatables:) -->
    <script src="{{ asset('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <!-- Aplicacion de data table -->
    <script>
    < script >
        $(function() {
            $('#example').DataTable({
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
            });
        });
    </script>
    <script>
    function exportGuitar(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
    </script>


    @endsection