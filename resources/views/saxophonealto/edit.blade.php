<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="container ">
          <h class="badge bg-primary ">Saxofones altos: {{$saxophonealto->brand}} {{$saxophonealto->mark}}
    <h1>Actualizar datos de Saxofones altos<b></b></h1>
    <form action="{{route ('saxophonealto.update', $saxophonealto->id)}}" method="post">

        @csrf 
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Modelo:</label>
        <input class="form-control" type="text" name="brand" value="{{ $saxophonealto->brand}}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Marca:</label>
        <input class="form-control" type="text" name="mark" value="{{ $saxophonealto->mark}}" required>
        </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Color</label>
        <input class="form-control" type="text" name="color" value="{{ $saxophonealto->color}}" required>
        </div>

        </div>
    <br>
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Numero piezas</label>
        <input class="form-control" type="text" name="Pieces" id="" value="{{ $saxophonealto->Pieces}}" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Registro</label>
        <input class="form-control" type="text" name="Register" value="{{ $saxophonealto->Register}}"required>
        </div>

    <div>
    </div>
    <br>
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" required>value="{{$saxophone->description}}" </textarea>
        </div>             
   <div class="row">

   <label for="">Comentario</label>
        <input class="form-control" type="text" name="comment" value="{{$saxophonealto->comment}}"required>
    
        </div>

    <div>
        <label for="">Seguimiento</label>
        <input class="form-control" type="text" name="charac" value="{{$saxophonealto->charac}}" required>
    
        </div>

   </div>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <input class="btn btn-primary" type="submit" value="Guardar"> 
         <input class="btn btn-info" type="reset" value="Restablecer"> 
        <input class="btn btn-primary" type="submit" value="Regresar"> 
                
            </input>
    </form>


</div>


