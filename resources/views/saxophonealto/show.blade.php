<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">
          <h class="badge bg-primary ">Saxofones: {{$saxophonealto->brand}} {{$saxophonealto->mark}}
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class= "btn btn-primary" href="{{route('saxophonealto.index')}}">Regresar</a>
</div>
</div>
</div> </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Saxofones</th>
  <th>Caracteristicas</th>
  <th>Recomendaciones</th>

  </tr>
  </thead>

  <tbody>
  
  <tr>
    <td> 
        <p>Imagen</p>
    <td>

    <p ><b>Marca:</b>{{$saxophonealto->mark}}</p>
    <p><b>Modelo:</b>{{$saxophonealto->brand}}</p>
    <p><b>Color:</b>{{$saxophonealto->color}}</p>
    <p><b>Numero piezas:</b>{{$saxophonealto->Pieces}}</p>
    <p><b>Registro:</b>{{$saxophonealto->Register}}</p>
    <p><b>Seguimiento:</b>{{$saxophonealto->charac}}</p>
    <p class="text-uppercase"><b class class="text-capitalize">Modelo:</b>{{$saxophonealto->brand}}</p>
    </td>
    <td> <p>{{$saxophonealto->description}}</p></td>
    </tr>
    </tbody>
  </tbody>
  </table>  
    <div class="card-footer">
    <div class = "col">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class= "btn btn-primary" href="{{route('saxophonealto.edit' , $saxophonealto->id)}}">Editar</a>
    <form action="{{route('saxophonealto.destroy', $saxophonealto->id)}}" method="post">
      @csrf 
      @method('DELETE')
      <input class="btn btn-danger" type="submit" value="Eliminar">
    </form>
   
  </div>
    </div>
  </div>
  </div>