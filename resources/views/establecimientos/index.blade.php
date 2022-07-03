@extends("layouts.app")

@section("content")
<h1>Destinos turisticos</h1>

<table class="table table-striped">
<tr>
<td>Nombre</td>
<td>Calificación</td>
<td>Dirección</td>
<td>Descripción</td>
</tr>

@foreach ($establecimientos as $e )
<tr>
<td>{{$e->nombre}}</td>
<td>{{$e->calificacion}}</td>
<td>{{$e->direccion}}</td>
<td>{{$e->descripcion}}</td>
</tr>

@endforeach
</table>
@endsection