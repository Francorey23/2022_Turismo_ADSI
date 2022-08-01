<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    public function comentarios(){
        return $this->belongsToMany('App\Models\Comentary','id_sitio','id');
    }
    //siempre ubicamos el nombre del Modelo
    public function servicios(){
        return $this->hasMany('App\Models\Service','id_sitio','id');
    }
    //1 Funcion relacion  reservas n a m con sitios
    public function reservas(){
        return $this->belongsToMany('App\Models\Reservation','id_sitio','id');
    }
}
