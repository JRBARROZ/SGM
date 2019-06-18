<?php

use Illuminate\Database\Seeder;
use App\User;
class UserProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => "Jhonatas",
                'sobrenome' => "Barrozo",
                'tipo' => "aluno",
                'email' => "aluno@aluno.com",
                'matricula' => "556",
                'periodo' => "1",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'fk_curso' => "1"
            ]
        );

    }
}
