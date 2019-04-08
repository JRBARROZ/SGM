<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
	protected $table = 'perguntas';

    protected $fillable = [
        'titulo', 'texto', 'users_id', 'estado'
    ];

    public function pergunta()
    {
        return $this->hasMany('App\Pergunta', 'id', 'perguntas_id');
    }

}
