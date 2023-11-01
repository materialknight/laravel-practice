@extends('layouts.app')

@section('title') Proyectos @endsection

@section('content')

<table class="table table-striped table-bordered table-hover">
   <thead><tr>
      <th>Nombre del Proyecto</th>
      <th>Fuente de los Fondos</th>
      <th>Monto Planificado</th>
      <th>Monto Patrocinado</th>
      <th>Monto de Fondos Propios</th>
   </tr></thead>
   <tbody>
   @foreach($entries as $entry)
      <tr>
         <td>{{$entry->nombreProyecto}}</td>
         <td>{{$entry->fuenteFondos}}</td>
         <td>{{$entry->montoPlanificado}}</td>
         <td>{{$entry->montoPatrocinado}}</td>
         <td>{{$entry->montoFondosPropios}}</td>

         <td><a href="{{route('editar', ['id' => $entry->id])}}" class="btn btn-secondary">Editar</a></td>
         <td><a href="{{route('borrar', ['id' => $entry->id])}}" class="btn btn-danger">Borrar</a></td>
      </tr>
   @endforeach
   </tbody>
</table>

<a href="{{route('agregar')}}" class="btn btn-primary">Agregar</a>
<a href="{{route('report')}}" class="btn btn-secondary">Generar Reporte</a>

@endsection