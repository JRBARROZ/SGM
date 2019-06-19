<?php

use Illuminate\Database\Seeder;
use App\Professores_Cadeiras;
class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professores_Cadeiras::create([
            'user_id' => 6,
            'cadeira_id' => 1
        ]);
    }
}
