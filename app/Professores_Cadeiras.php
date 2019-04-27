<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professores_Cadeiras extends Model
{
    protected $table = "professores_cadeiras";

    protected $fillable = ["cadeira_id", "user_id"];

}
