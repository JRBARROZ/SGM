<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmPerguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_perguntas', function(Blueprint $table)
		{
			$table->integer('id_pergunta');
			$table->integer('fk_estudante')->index('fk_sgm_perguntas_sgm_estudantes1_idx');
			$table->string('titulo', 45);
			$table->string('texto', 45);
			$table->primary(['id_pergunta','fk_estudante']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_perguntas');
	}

}
