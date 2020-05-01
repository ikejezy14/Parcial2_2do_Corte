<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Recepcion;
use App\Hospedaje;
use App\Habitacion;
use App\Elemento;
use App\Galeria;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel=Hotel::with('recepcion')->get();
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
        //Guardar One to One
        $hotel = new Hotel;
        $hotel->nombre='10 Star';
        $hotel->save();

        //$recepcion= new Recepcion;
        //$recepcion->nombre='Juana';
       // $hotel->recepcion()->save($recepcion);

        return $hotel->recepcion()->get();
        //Fin Guardar One to One
        
        //$hotel= Hotel::create(['nombre'=>'5 Star']);
        //$recepcion= Recepcion::create(['nombre'=>'Jennifer','hotel_id'=>1]);
        //$hospedaje= Hospedaje::create(['nombre'=>'Bquilla','codigo_hospedaje'=>123,'hotel_id'=>1]);
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
        $hotel->update(['nombre'=>'9999 estrellas']);
        $hotel->recepcion()->update([
            'nombre'=>'Andrea',
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
        $hotel->recepcion()->delete();
        $hotel->hospedajes()->delete();
        $hotel->habitaciones()->delete();
        $hotel->delete();
        return "Eliminado Correctamente";
    }
}
