@extends("layouts.app")

@section("content")
<h1>Eventos</h1>

<table class="table table-striped table-bordered table-hover table-responsive">
<tr>
<td>Lugar</td>
<td>Fecha</td>
<td>Modalidad</td>
<td>Motivo</td>
<td>Hora Inicio</td>
<td>Hora Fin</td>
</tr>

@foreach ($establecimientos as $e )
<tr>
<td>{{$e->lugar}}</td>
<td>{{$e->fecha}}</td>
<td>{{$e->modalidad}}</td>
<td>{{$e->motivo}}</td>
<td>{{$e->hora_inicio}}</td>
<td>{{$e->hora_fin}}</td>
</tr>

@endforeach
</table>
@endsection