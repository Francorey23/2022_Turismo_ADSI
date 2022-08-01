<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->belongsToMany('App\Models\User','id_user','id');
    }

     //2 Funcion relacion  sitios n a m con reserva
     //la llave foranea se llama igual en las 2 funciones id_sitio
    public function sitios(){
        return $this->belongsToMany('App\Models\Site','id_sitio','id');
    }
}
