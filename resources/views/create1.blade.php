@extends('layouts.app')

@section('content')
<p>Llene los campos de la nueva entrada!</p>
<hr>
<form method="POST" action="{{ route('agregando') }}" class="form-group">
   @csrf
   <label class="form-label">nombreProyecto
      <input type="text" name="nombreProyecto" required class="form-control">
   </label>
   <br>
   <label class="form-label">fuenteFondos
      <input type="text" name="fuenteFondos" required class="form-control">
   </label>
   <br>
   <label class="form-label">montoPlanificado
      <input type="number" name="montoPlanificado" required class="form-control">
   </label>
   <br>
   <label class="form-label">montoPatrocinado
      <input type="number" name="montoPatrocinado" required class="form-control">
   </label>
   <br>
   <label class="form-label">montoFondosPropios
      <input type="number" name="montoFondosPropios" required class="form-control">
   </label>

   <button type="submit" class="btn btn-primary">Agregar</button>
</form>
<a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
@endsection
