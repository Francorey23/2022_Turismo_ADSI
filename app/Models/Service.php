<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function sitio(){
        return $this->belongsTo('App\Models\Site','id_sitio','id');
    }
}
