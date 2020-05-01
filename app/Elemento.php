<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    protected $fillable = [
        'nombre' ,'codigo' ,
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function habitaciones()
    {
        return $this->belongsToMany('App\Habitacion', 'habitacion__elementos');
    }
}

