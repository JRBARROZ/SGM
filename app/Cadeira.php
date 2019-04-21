<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadeira extends Model
{
	protected $table = 'cadeiras';

    protected $fillable = [
        'nome', 'periodo', 'fk_curso'
    ];

}
