@extends("layouts.app")

@section("content")
<h1>Registrar Evento</h1>
<form method="post" action="/eventos/crear">
        @csrf
        <input type="text" name="lugar" placeholder="Ingrese nombre" value="{{old("lugar")}}">
        <input type="date" name="fecha" placeholder="Fecha" value="{{old("fecha")}}">
        <input type="text" name="modalidad" placeholder="Modalidad" value="{{old("modalidad")}}">
        <input type="text" name="motivo" placeholder="Motivo" value="{{old("motivo")}}">
        <input datetime="text" name="hora_inicio" placeholder="Hora inicio" value="{{old("hora_inicio")}}">
        <input datetime="text" name="hora_fin" placeholder="Hora fin" value="{{old("hora_fin")}}">
        <input type="submit" name="submit" value="Enviar">
    </form>

    @if($errors->any())
        <div style="color:green">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif
@endsection