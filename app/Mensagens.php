<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\user;
class Mensagens extends Model
{
    protected $table = 'mensagens';

    protected $fillable = [
        'mensagem','users_id',
    ];

   	 public function users()
    {
        return $this->hasMany('App\User', 'id', 'users_id');
    }
}
