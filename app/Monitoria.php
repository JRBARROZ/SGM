<?php

namespace App;

use App\User;
use App\Curso;
use App\Cadeira;
use Illuminate\Database\Eloquent\Model;

class Monitoria extends Model
{
	protected $table = 'monitorias';

    protected $fillable = [
        'data', 'hora_inicio', 'hora_fim', 'titulo', 'descricao', 'users_id', 'cadeiras_id'
    ];

}
