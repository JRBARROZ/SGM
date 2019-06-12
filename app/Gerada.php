<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Gerada extends Model
{
    function atas(){
        return $this->hasMany('App\Ata');
    }
}
