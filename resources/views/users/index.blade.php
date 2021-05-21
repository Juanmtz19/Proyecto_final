@extends('layouts.dashboard')

@section('content')

<div class="">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">Usuarios registrados</h2>
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <span   onclick="exportUser(event.target)" data-href="/exportToCSV" id="export" class="btn btn-info">Exportar a CSV</span>
  <a href="{{route('users.create')}}"><i class= "fa fas-add"></i>+Nuevo Registro</a>

</div>
</div>
</div>
        </div>
      <div class="card-body">
    
      <table id="example" class="table table-striped">
  <thead>
  <tr>
  <th>ID</th>
  <th>Email</th>
  <th>Nombre</th>
  
  </tr>
  </thead>

  <tbody>
  @forelse ($users as $user)
  <tr>
  <td><p>{{$user->id}}</p></td>
    <td> 
    <a class="btn btn-info btn-small" href="{{ route ('users.show', $user->id)}}">
    <h4>{{$user->name}}</h4></td>
    </a>
    

    <p><b>Email</b>{{$user->email}}</p>
    
  </tr>
  </tbody>
  


@empty
<h1>No existen datos en la tabla correspondiente</h1>

@endforelse

</tbody>

</table>  
</div>

</div>
<!-- Invocación DataTables --> 
<!-- DataTable --> 
<script src="{{ asset ('assets/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset ('assets/js/jquery.dataTables.min.js') }}"></script>

<script> 
 $(function () {
  $('#example').DataTable();
} );
</script>

<script>
   function exportUser(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
