<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar','sobrenome', 'tipo', 'matricula', 'email', 'periodo', 'password', 'fk_curso'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function cursos()
    {
        return $this->hasMany('App\Curso', 'id', 'fk_curso');
    }

    public function cadeiras_professor(){
        return $this->hasMany('App\Cadeira', 'professores_cadeiras');
    }

    public function cadeiras_monitor(){
        return $this->hasMany('App\Cadeira', 'cadeira_id');
    }
}
