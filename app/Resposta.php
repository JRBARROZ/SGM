<?php

namespace App;

use App\User;
use App\Pergunta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;


class Resposta extends Model
{
	protected $table = 'respostas';

    protected $fillable = [
        'texto', 'users_id', 'perguntas_id'
    ];

    public function perguntas()
    {
        return $this->hasMany('App\Pergunta', 'id', 'perguntas_id');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'id', 'users_id');
    }

    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

}
