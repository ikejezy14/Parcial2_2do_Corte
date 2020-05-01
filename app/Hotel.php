<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nombre' ,
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function recepcion(){
        return $this->hasOne('App\Recepcion');
    }

    public function hospedajes(){
        return $this->hasMany('App\Hospedaje');
    }

    public function habitaciones(){
        return $this->hasMany('App\Habitacion');
    }

    public function galerias(){
        return $this->morphMany('App\Galeria','galeriable','galeriable_type','galeriable_id');
    }
}
