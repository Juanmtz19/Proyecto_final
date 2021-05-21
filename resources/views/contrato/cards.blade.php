
@extends('layouts.dashboard')

@section('title', 'Cards-Contrato')

@section('content')

    <div class="row">
        @forelse($contrato as $contrato)
           <!-- //renderizar date -->
           
            <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mr-3 ml-3">
                <div class="card-header">
                     <h2 class="text-primary">{{$contrato->grup}} {{$contrato->grup2}}</h2>
                </div>
                
                <div class="card-body">
                    <p class="card-text text-truncate" >{{$contrato->description}}</p>
                    <div class="row">
                        <div class="col"> 
                            <p class="text-muted">Fecha de evento: {{$contrato->eventName}}</p>
                        </div>

                        <div class="col"> 
                            <p class="text-muted">Ciudad: {{$contrato->city}}</p>
                        </div>

                        <div class="col"> 
                            <p class="text-muted">Capacidad: {{$contrato->capacity}}</p>
                        </div>
                    </div>
            </div>
            <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-info padding-left mr-2" href="#"><i class="fas fa-info"></i> Ver más</a> 
                
            </div>
        </div>
        @empty
           <!-- //Mensaje por si no encuntra nada -->
            <h3>No hay registros</h3>
        @endforelse        

    </div>


@endsection    