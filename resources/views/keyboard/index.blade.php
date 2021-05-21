@extends('layouts.dashboard')

@section('content')

<div class="">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-1">
                        <a class="btn btn-outline-info" href="{{ route('keyboard.create') }}"><i
                                class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="col-md-7">
                        <h2 class="card-title">Lista de teclados registrados</h2>
                    </div>
                    <div class="cold-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-online-info padding-left ml-2" href="{{url('/keyboard/index2')}}"><i
                                    class="fas fa-table"></i></a>
                            <a class="btn btn-online-info padding-left ml-2" href="{{url('/keyboard/cards')}}"><i
                                    class="fas fa-border-all"></i></a>
                            <a class="btn btn-informa-info padding-left ml-2" href="{{url('/keyboard/chart')}}"><i
                                    class="fas fa-chart-bar"></i></a>
                            <a class="btn btn-online-info  mr-2" href="{{url ('/keyboard/exportToXlsx')}}"><i
                                    class="fas fa-file-excel"></i> </a>
                            <span onclick="exportKeyboard(event.target)" data-href="/exportToCSV" id="export"
                                class="btn btn-outline-info">
                                <i class="fas fa-file-csv"></i></span>
                            <a class="btn btn-online-info mr-2" href="{{url('/keyboard/import')}}"><i
                                    class="fas fa-file-import"></i></a>
                            <a href="{{route('keyboard.create')}}"><i class="fa fas-add"></i>Registro Nuevo</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table id="example" class="table table-striped">

                    <thead>
                        <tr>
                            <td>Imagen</td>
                            <th>Teclados</th>
                            <th>Marcas</th>
                            <th>Modelos</th>
                            <th>Recomendaciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($keyboard as $keyboards)
                        <tr>
                        <td>
                                <img style="height: 100px; width: 200px; object-fit: cover;"
                                    src="/imagenes/keyboard/{{ $keyboards->image }}"
                                    alt="{{ $keyboards->brand }} {{ $keyboards->model }}" />
                            </td>
                            <td>
                                <a class="btn btn-info btn-small" href="{{ route ('keyboard.show', $keyboards->id)}}">
                                    <h4>{{$keyboards->brand}} {{$keyboards->model}}</h4>
                            </td>
                            </a>
                            <td>

                                <p><b>Modelo:</b>{{$keyboards->brand}}</p>
                                <p><b>Marca:</b>{{$keyboards->mark}}</p>
                                <p><b>Color:</b>{{$keyboards->color}}</p>
                                <p><b>Octavas:</b>{{$keyboards->octaves}}</p>
                                <p><b>Estuche:</b>{{$keyboards->case}}</p>
                                <p><b>Función:</b>{{$keyboards->tune}}</p>
                            </td>
                            <td>
                                <p>{{$keyboards->description}}</p>
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
    <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>


    <script>
    $(function() {
        $('#example').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'exel', 'pdf', 'print'
            ]
        });
    });
    </script>
    <script>
    function exportKeyboard(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
    </script>


    @endsection