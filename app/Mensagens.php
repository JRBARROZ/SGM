<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\user;
class Mensagens extends Model
{
    protected $table = 'mensagens';

    protected $fillable = [
        'mensagem','user_id',
    ];

   	 public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
