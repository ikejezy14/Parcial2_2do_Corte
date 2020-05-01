<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Recepcion;
use App\Hospedaje;
use App\Habitacion;
use App\Elemento;
use App\Galeria;
use Illuminate\Http\Request;

class Prueba3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel=Hotel::with('habitaciones')->get();
        //$hotel2=$hotel->recepcion()->get();
        return $hotel;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $hotel=Hotel::find(9);
       $habitacion=new Habitacion;
       $habitacion->nombre='Golden';
       $habitacion->num_habitacion=12312;
       $hotel->habitaciones()->save($habitacion);
       return $hotel->habitaciones()->get();
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
        $hotel=Hotel::find($id);
        $hotel->update(['nombre'=>'super estrellas']);
        $hotel->habitaciones()->update([
            'nombre'=>'Suit',
            'num_habitacion' => '9999',
        ]);
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
        $hotel=Hotel::find($id);
        
        $hotel->habitaciones()->delete();
        $hotel->hospedajes()->delete();
        $hotel->recepcion()->delete();
        $hotel->delete();
        return "Eliminado Correctamente";
    }
}
