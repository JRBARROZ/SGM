<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ata extends Model
{
    function users(){
        return $this->belongsTo('App\User');
    }
    
}
