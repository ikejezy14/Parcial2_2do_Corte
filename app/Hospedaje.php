<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected $fillable = [
        'nombre' , 'codigo_hospedaje','hotel_id'
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function hotel(){
        return $this->belongsTo('App\Hotel');
    }


    public function galerias(){
        return $this->morphMany('App\Galeria','galeriable','galeriable_type','galeriable_id');
    }
}
