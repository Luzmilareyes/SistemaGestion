<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establecimientos = Establecimiento::all();
        
        return view('establecimientos.index', compact('establecimientos'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $establecimiento = new Establecimiento();
        $resultado = $establecimiento::get();
        return view('establecimientos.crear');

        $establecimiento->nombre = $request->nombre;
        $establecimiento->calificacion = $request->calificacion;
        $establecimiento->direccion = $request->direccion;
        $establecimiento->descripcion = $request->descripcion;

        $establecimiento->save();
        return redirect(Route("establecimientos.index"));
    }

    public function createPost (Request $request)
    {
        $establecimiento = new Establecimiento();
        $establecimiento->nombre = $request->nombre;
        $establecimiento->calificacion = $request->calificacion;
        $establecimiento->direccion = $request->direccion;
        $establecimiento->descripcion = $request->descripcion;

        $establecimiento->save();
      
        return redirect(Route("establecimientos.index"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Establecimiento $establecimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultado = Establecimiento::find($id);
        return view('establecimiento.editar', ["establecimiento"=>$resultado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establecimiento $establecimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establecimiento $establecimiento)
    {
        //
    }
}
