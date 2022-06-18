<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $evento = new Evento();
        $evento->lugar = $request->input('lugar');
        $evento->fecha = $request->input('fecha');
        $evento->modalidad = $request->input('modalidad');
        $evento->motivo = $request->input('motivo');
        $evento->hora_inicio = $request->input('hora_inicio');
        $evento->hora_fin = $request->input('hora_fin');
        $evento->save();
        return "El evento se ha creado satisfactoriamente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mostrar(Request $request)
    {
        $eventos = Evento::all();
        return view('evento.mostrar')->with('eventos', $eventos);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $evento = new Evento();
        $evento->lugar = $request->input('lugar');
        $evento->fecha = $request->input('fecha');
        $evento->modalidad = $request->input('modalidad');
        $evento->motivo = $request->input('motivo');
        $evento->hora_inicio = $request->input('hora_inicio');
        $evento->hora_fin = $request->input('hora_fin');
        $evento->save();
        return "El evento se actualizo";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
