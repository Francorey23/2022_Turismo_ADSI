<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\Models\User','id_user','id');
    }

    public function sites(){
        return $this->belongsToMany('App\Models\Site','id_sitio','id');
    }
}
