@extends('layouts.dashboard')

@section('title', 'Cards-Keyboard')

@section('content')

    <div class="row">
        @forelse($keyboard as $keyboard)
           <!-- //renderizar date -->
            <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mr-3 ml-3">
                <div class="card-header">
                     <h2 class="text-primary">{{$keyboard->brand}} {{$keyboard->model}}</h2>
                </div>
                <div class="card-body">
                    <p class="card-text text-truncate" >{{$keyboard->description}}</p>
                    <div class="row">
                        <div class="col"> 
                            <p class="text-muted">Color: {{$keyboard->color}}</p>
                        </div>

                        <div class="col"> 
                            <p class="text-muted">Caja: {{$keyboard->case}}</p>
                        </div>

                        <div class="col"> 
                            <p class="text-muted">Función: {{$keyboard->fuction}}</p>
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