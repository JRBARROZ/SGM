<?php

use App\User;
use Illuminate\Database\Seeder;

class UserAdmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = new User();
        $adm->name = "Usuarío";
        $adm->sobrenome = "ADM";
        $adm->tipo = "admin";
        $adm->email = "adm@adm.com";
        $adm->matricula = "123";
        $adm->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $adm->save();

    }
}
