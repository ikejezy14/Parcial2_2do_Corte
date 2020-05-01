<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        'nombre' , 'galeriable_type' , 'galeriable_id',
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function galeriable(){
        return $this->morphTo();
    }
}
