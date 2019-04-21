<?php

use App\User;
use App\Curso;
use App\Cadeira;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $tipo = $faker->randomElement($array= array ('aluno', 'monitor', 'professor'));
    $curso = $faker->randomElement([1,2,3]);
    if($tipo == 'monitor'){
        $cargo = $faker->randomElement($array= array ('bolsista', 'voluntario')); 
        $fk = Cadeira::select('id')->where('fk_curso', '=', $curso)->get()->random();
        /*        switch ($curso) {
            case 1:
                $fk = 1;
                $cadeira = $faker->randomElement([1, 2]);
                break;
            case 2:
                $fk = 2;
                $cadeira = $faker->randomElement([3, 4]);
                break;
            case 3:
                $fk = 3;
                $cadeira = $faker->randomElement([5, 6]);
                break;
  */
            // }
    }else{
        $cargo = null;
        $cadeira = null;
        $fk = null;
    }
    
    return [
        'name' => $faker->name,
        'sobrenome'=> $faker->lastName,
        'cargo'=> $cargo,
        'matricula'=> $faker->numberBetween($min = 0, $max = 10000),
        'periodo'=> $faker->numberBetween($min = 1, $max = 4),
        'tipo'=>$tipo,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'fk_curso'=>$curso,
        'cadeira_id'=>$fk
    ];
});
