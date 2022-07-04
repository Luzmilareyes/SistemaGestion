@extends("layouts.app")

@section("content")
<h1>Registrar Destino Turistico</h1>
<form method="post" action="/establecimientos/crear">
        @csrf
        <input type="text" name="ciudad" placeholder="Ingrese ciudad" value="{{old("ciudad")}}">
        <input type="text" name="nombre" placeholder="Establecimiento" value="{{old("nombre")}}">
        <input type="text" name="calificacion" placeholder="Calificación" value="{{old("calificacion")}}">
        <input type="text" name="direccion" placeholder="Direccion" value="{{old("direccion")}}">
        <input type="text" name="descripcion" placeholder="Descripción" value="{{old("descripcion")}}">
        <input type="submit" name="submit" value="Guardar">
    </form>

    @if($errors->any())
        <div style="color:green">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif
@endsection