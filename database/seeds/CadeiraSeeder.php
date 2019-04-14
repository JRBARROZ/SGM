<?php

use Illuminate\Database\Seeder;

class CadeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cadeiras')->insert([['nome'=>'Rede de Computadores','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Lógica de Programação','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Matemática Aplicada','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Português Instrumental','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Matemática Básica','periodo'=>1, 'fk_curso'=>'3']]);
        DB::table('cadeiras')->insert([['nome'=>'Inglês Instrumental','periodo'=>1, 'fk_curso'=>'3']]);
    }
}
