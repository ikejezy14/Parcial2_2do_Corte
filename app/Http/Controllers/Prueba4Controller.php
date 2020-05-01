<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Recepcion;
use App\Hospedaje;
use App\Habitacion;
use App\Elemento;
use App\Galeria;
use App\Habitacion_elemento;
use Illuminate\Http\Request;

class Prueba4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitacion_elementos=Habitacion_elemento::all();
        //$hotel2=$hotel->recepcion()->get();
        return $habitacion_elementos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $elemento= new Elemento;
        $elemento->nombre='Cama';
        $elemento->codigo=123456;
        $elemento->save();
        

        $habitacion = Habitacion::find(12);
        $habitacion->elementos()->attach([8,9]);
        return "creado correctamente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion->elementos()->sync([8]);
        return "Acualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion->elementos()->detach([8]);
        return "Removido correctamente";

    }
}
