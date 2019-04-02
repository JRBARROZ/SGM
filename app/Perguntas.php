<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{

	protected $table = 'perguntas';

    protected $fillable = [
        'titulo', 'texto', 'users_id'
    ];

    public $timestamps = false;

}
