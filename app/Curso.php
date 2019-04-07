<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Curso extends Model
{
	protected $table = 'cursos';

    protected $fillable = [
        'nome', 'tipo', 'sigla'
    ];

    public function post()
    {
        return $this->hasOne('App\Pergunta');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
