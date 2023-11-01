@extends('layouts.app')

@section('content')
<p>¿Seguro que desea borrar la entrada {{$entry->nombreProyecto}}?</p>
<hr>
<form method="POST" action="{{ route('borrando', ['id' => $entry->id]) }}" class="form-group">
   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Borrar</button>
</form>
<a href="{{route('home')}}" class="btn btn-primary">Cancelar</a>
@endsection