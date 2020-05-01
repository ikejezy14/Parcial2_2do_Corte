<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    protected $fillable = [
        'nombre' , 'hotel_id'
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function hotel(){
        return $this->belongsTo('App\Hotel');
    }

}
