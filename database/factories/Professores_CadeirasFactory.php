<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use App\Model;
use App\Cadeira;
use App\Professores_Cadeiras;
use Faker\Generator as Faker;

$factory->define(Professores_Cadeiras::class, function (Faker $faker) {

    $professor = DB::select('select id from users where id not in (select user_id from professores_cadeiras) and tipo = "professor"');

    $cadeira = DB::select('select id from cadeiras where id not in (select cadeira_id from professores_cadeiras)');

    return [
        'user_id' => $professor[0]->id,
        'cadeira_id' => $cadeira[0]->id
    ];
});
