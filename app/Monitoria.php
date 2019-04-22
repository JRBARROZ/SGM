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

    // relacionamento 1 n entre monitorias e cursos
    public function cursos()
    {
        return $this->hasMany('App\Curso', 'id', 'fk_curso');
    }

    // relacionamento 1 n entre monitorias e cadeiras
    public function cadeiras()
    {
        return $this->hasMany('App\Cadeira', 'id', 'cadeiras_id');
    }

    // relacionamento 1 n entre monitorias e users
    public function users()
    {
        return $this->hasMany('App\User', 'id', 'users_id');
    }


}
