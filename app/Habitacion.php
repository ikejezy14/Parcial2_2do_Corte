<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $fillable = [
        'nombre' , 'num_habitacion'
    ];

    protected $hidden = [
        'id', 'hotel_id', 'created_at', 'updated_at'
    ];

    public function hotel(){
        return $this->belongsTo('App\Hotel');
    }

    public function elementos()
    {
        return $this->belongsToMany('App\Elemento', 'habitacion__elementos');
    }

    public function galerias(){
        return $this->morphMany('App\Galeria','galeriable','galeriable_type','galeriable_id');
    }
}
