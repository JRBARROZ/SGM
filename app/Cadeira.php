<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Cadeira extends Model
{
	protected $table = 'cadeiras';

    protected $fillable = [
        'nome', 'periodo', 'fk_curso'
    ];

    public function cursos(){
        return $this->hasMany('App\Curso', 'id', 'fk_curso');
    }

    public function monitores(){
        return $this->hasMany(User::class);
    }
}
