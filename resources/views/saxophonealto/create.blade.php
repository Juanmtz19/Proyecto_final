<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}">

<div class="container ">
    <h1>Formulario para crear registros</h1>
    <form action="{{route ('saxophonealto.store')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen</label>
                <input class="form-control" type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>


        <div class="row">

            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo</label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Modelo" required>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Marca</label>
                <input class="form-control" type="text" name="mark" id="" placeholder="Marca" required>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Color</label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Numero Piezas</label>
                <input class="form-control" type="text" name="Pieces" id="" placeholder="Numero de piezas" required>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
                <label for="">Registro</label>
                <input class="form-control" type="text" name="Register" id="" placeholder=" Resgistro" required>
            </div>

            <div>
            </div>
            <br>
            <label for="">Descripcion</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Descripción"
                required> </textarea>
        </div>
        <div class="row">

            <label for="">Comentario</label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentario" required>

        </div>

        <div>
            <label for="">Seguimiento</label>
            <input class="form-control" type="text" name="charac" id="" placeholder="Seguimiento" required>

        </div>

</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input class="btn btn-primary" type="submit" value="Guardar">
    <input class="btn btn-info" type="reset" value="Restablecer">


    </input>
    </form>


</div>