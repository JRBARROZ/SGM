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
                'name' => "Arya",
                'sobrenome' => "Stark",
                'tipo' => "aluno",
                'email' => "aluno@aluno.com",
                'matricula' => "552",
                'periodo' => "1",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'fk_curso' => "2"
            ]
        );
        User::create(
            [
                'name' => "Ben",
                'sobrenome' => "Stark",
                'tipo' => "aluno",
                'email' => "aluno3@aluno.com",
                'matricula' => "553",
                'periodo' => "2",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'fk_curso' => "2"
            ]
        );
        User::create(
            [
                'name' => "Jon",
                'sobrenome' => "Snow",
                'tipo' => "aluno",
                'email' => "aluno1@aluno.com",
                'matricula' => "554",
                'periodo' => "1",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'fk_curso' => "1"
            ]
        );
        User::create(
            [
                'name' => "Daenarys",
                'sobrenome' => "Targaryen",
                'tipo' => "aluno",
                'email' => "aluno2@aluno.com",
                'matricula' => "555",
                'periodo' => "1",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'fk_curso' => "1"
            ]
        );
        User::create(
            [
                'name' => "Cersei",
                'sobrenome' => "Lennister",
                'tipo' => "professor",
                'email' => "professor@professor.com",
                'matricula' => "556",
                'periodo' => "2",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'fk_curso' => "1",
            ]
        );

        User::create(
            [
                'name' => "Tyrion",
                'sobrenome' => "Lennister",
                'tipo' => "monitor",
                'email' => "monitor@monitor.com",
                'matricula' => "558",
                'cargo' => 'bolsista',
                'periodo' => "2",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'fk_curso' => "1",
                'cadeira_id' => '1',
                'curso_monitoria' => '1',
                'periodo_monitoria' => '1'
            ]
        );
        

    }
}
