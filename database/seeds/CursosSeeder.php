<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('cursos')->insert(['nome'=>'Informática para internet', 'sigla'=>'IPI', 'tipo'=>'tecnico']);
        DB::table('cursos')->insert(['nome'=>'Logistica', 'sigla'=>'LOG', 'tipo'=>'tecnico  ']);
        DB::table('cursos')->insert(['nome'=>'Gestão da Qualidade', 'sigla'=>'GDQ', 'tipo'=>'superior']);
    }
}
