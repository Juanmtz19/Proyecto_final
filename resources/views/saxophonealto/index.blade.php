@extends('layouts.dashboard')

@section('content')

<div class="">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-1">
                        <a class="btn btn-outline-info" href="{{ route('saxophonealto.create') }}"><i
                                class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="col-md-7">
                        <h2 class="card-title">Casa del saxofón</h2>
                    </div>
                    <div class="cold-md-4">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-online-info padding-left ml-2" href="{{url('/saxophonealto/index2')}}"><i
                                    class="fas fa-table"></i></a>
                            <a class="btn btn-online-info padding-left ml-2" href="{{url('/saxophonealto/cards')}}"><i
                                    class="fas fa-border-all"></i></a>
                            <a class="btn btn-informa-info padding-left ml-2" href="{{url('/saxophonealto/chart')}}"><i
                                    class="fas fa-chart-bar"></i></a>
                            <a class="btn btn-online-info  mr-2" href="{{url ('/saxophonealto/exportToXlsx')}}"><i
                                    class="fas fa-file-excel"></i> </a>
                            <span onclick="exportSaxophone(event.target)" data-href="/exportToCSV" id="export"
                                class="btn btn-outline-info">
                                <i class="fas fa-file-csv"></i></span>
                            <a class="btn btn-online-info mr-2" href="{{url('/saxophonealto/import')}}"><i
                                    class="fas fa-file-import"></i></a>
                            <a href="{{route('saxophonealto.create')}}"><i class="fa fas-add"></i>Registro Nuevo</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table id="example" class="table table-striped">

                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Disponibles</th>
                            <th>Marcas</th>
                            <th>Modelos</th>
                            <th>Color</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($saxophonealto as $saxophonealtos)
                        <tr>
                            <td>
                                <img style="height: 100px; width: 200px; object-fit: cover;"
                                    src="/imagenes/saxophonealto/{{ $saxophonealtos->image }}"
                                    alt="{{ $saxophonealtos->brand }} {{ $saxophonealtos->model }}" />
                            </td>
                            <td>
                                <a class="btn btn-info btn-small"
                                    href="{{ route ('saxophonealto.show', $saxophonealtos->id)}}">
                                    <h4>{{$saxophonealtos->brand}} {{$saxophonealtos->model}}</h4>
                            </td>
                            </a>
                            <td>

                                <p><b>Modelo:</b>{{$saxophonealtos->brand}}</p>
                                <p><b>Marca:</b>{{$saxophonealtos->mark}}</p>
                                <p><b>Color:</b>{{$saxophonealtos->color}}</p>
                                <p><b>Número piezas:</b>{{$saxophonealtos->Pieces}}</p>
                                <p><b>Registro:</b>{{$saxophonealtos->Register}}</p>
                            </td>
                            <td>
                                <p>{{$saxophonealtos->description}}</p>
                            </td>

                        </tr>
                    </tbody>



                    @empty
                    <h1>No existen registros</h1>

                    @endforelse


                </table>
            </div>
        </div>
    </div>



    <script type="text/javascript">
    $(function() {
        $('#example').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'exel', 'pdf', 'print'
            ],
        });
    });
    </script>

    <!--
    <script>
    function exportSaxophonealto(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
    </script>
    -->


    @endsection