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
        // cadeiras do 1º período ipi
        DB::table('cadeiras')->insert([['nome'=>'Redes de Computadores','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Lógica de Programação e Estrutura de Dados','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Fundamentos da Informática','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Inglês Instrumental','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Segurança do Trabalho','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Português Instrumental','periodo'=>1, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Matemática Aplicada','periodo'=>1, 'fk_curso'=>'1']]);
        
        // cadeiras do 2º período ipi
        DB::table('cadeiras')->insert([['nome'=>'POO(Progamação Orientada a Objetos)','periodo'=>2, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Desenvolvimento para Web I','periodo'=>2, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Projeto e Pratica I','periodo'=>2, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Banco de Dados','periodo'=>2, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Ética Profisssional e Cidadania','periodo'=>2, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Sistemas Operacionais','periodo'=>2, 'fk_curso'=>'1']]);
        DB::table('cadeiras')->insert([['nome'=>'Segurança de Sistemas para Internet','periodo'=>2, 'fk_curso'=>'1']]);
        
        
        // cadeiras do 1º período log
        DB::table('cadeiras')->insert([['nome'=>'Logística Reversa e Meio Abiente','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Matemática Básica','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Introdução à Administrção','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Informática Básica','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Português Aplicado','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Metodologia Cientifica','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Introdução à Logística','periodo'=>1, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Ética Profissional','periodo'=>1, 'fk_curso'=>'2']]);
        
        
        // cadeiras do 2º período log
        DB::table('cadeiras')->insert([['nome'=>'Gerenciamento e Economia de Sistemas Logísticos','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Gestão de Pessoas','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Estatística Básica','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Logística de Transporte e Destribuição','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Logística de Armazenagem','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Comércio e Relações Internacionais','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Legislção e Tributação em Logística','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Inglês Instrumental','periodo'=>2, 'fk_curso'=>'2']]);
        DB::table('cadeiras')->insert([['nome'=>'Gestão da Cadeia de Suprimento','periodo'=>2, 'fk_curso'=>'2']]);


        DB::table('cadeiras')->insert([['nome'=>'Matemática Básica','periodo'=>1, 'fk_curso'=>'3']]);
        DB::table('cadeiras')->insert([['nome'=>'Inglês Instrumental','periodo'=>1, 'fk_curso'=>'3']]);
    }
}
