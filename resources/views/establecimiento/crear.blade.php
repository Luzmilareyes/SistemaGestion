@extends("layouts.master")

@section("principal")
<h1>Registrar Destino Turistico</h1>
<form method="post" action="/establecimientos">
        @csrf
        <input type="text" name="nombres" placeholder="ingrese nombre" value="{{old("nombre")}}">
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