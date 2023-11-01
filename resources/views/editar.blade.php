@extends('layouts.app')

@section('content')
<p>Cambie los campos que desee!</p>
<hr>
<form method="POST" action="{{ route('confirmEdit', ['id' => $entry->id])}}" class="form-group">
   @csrf
   @method('PUT')
   <label class="form-label">nombreProyecto
      <input type="text" name="nombreProyecto" required value="{{$entry->nombreProyecto}}" class="form-control">
   </label>
   <br>
   <label class="form-label">fuenteFondos
      <input type="text" name="fuenteFondos" required value="{{$entry->fuenteFondos}}" class="form-control">
   </label>
   <br>
   <label class="form-label">montoPlanificado
      <input type="number" name="montoPlanificado" required value="{{$entry->montoPlanificado}}" class="form-control">
   </label>
   <br>
   <label class="form-label">montoPatrocinado
      <input type="number" name="montoPatrocinado" required value="{{$entry->montoPatrocinado}}" class="form-control">
   </label>
   <br>
   <label class="form-label">montoFondosPropios
      <input type="number" name="montoFondosPropios" required value="{{$entry->montoFondosPropios}}" class="form-control">
   </label>

   <button type="submit" class="btn btn-primary">Cambiar Entrada</button>
</form>
<a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
@endsection
