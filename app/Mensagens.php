<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagens extends Model
{
    protected $table = 'mensagens';

    protected $fillable = [
        'mensagem'
    ];

   	public function users(){
   		return $this->belongsTo('App/User');
   	}
}
