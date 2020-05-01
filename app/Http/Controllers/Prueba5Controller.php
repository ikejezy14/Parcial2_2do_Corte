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

class Prueba5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Galerias=Galeria::all();
        return $Galerias;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create para hotel
          $hotel = Hotel::find(9);
          $hotel->galerias()->create(['nombre'=>'Galeria1']);
          return $hotel->galerias()->get();

        /*
        //Create para habitacion
        $habitacion = Habitacion::find(2);
        $habitacion->galerias()->create(['nombre'=>'Galeria2']);
        

        
        //Create para hospedaje
        $hospedaje = Hospedaje::find(10);
        $hospedaje->galerias()->create(['nombre'=>'Galeria3']);
        */
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

        //Update para hotel
        $hotel = Hotel::find($id);
        foreach ($hotel->galerias as $galeria) {
        $galeria->nombre = ' nueva galeria';
        $galeria->save();
        }
        return "Acualizado correctamente";
        
        /*
        //Update para hospedaje
        $hospedaje = Hospedaje::find($id);
        foreach ($hospedaje->galerias as $galeria) {
        $galeria->nombre = ' Alooo';
        $galeria->save();
        }

        //Update para habitacion
        $habitacion = Habitacion::find($id);
        foreach ($habitacion->galerias as $galeria) {
        $galeria->nombre = 'asjjasdj';
        $galeria->save();
        }
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar Morph Hotel
        $hotel = Hotel::find($id);
        foreach ($hotel->galerias as $galeria) {
        $galeria->delete();
        return "Eliminado correctamente";
        }
        
        /*
        //eliminar Morph Hospedaje
        $hospedaje = Hospedaje::find($id);
        foreach ($hospedaje->galerias as $galeria) {
        $galeria->delete();
        return "Eliminado correctamente";
        }
        

        //eliminar Morph Habitacion
        $habitacion = Habitacion::find($id);
        foreach ($habitacion->galerias as $galeria) {
        $galeria->delete();
        return "Eliminado correctamente";
        }
        */
    }
}
