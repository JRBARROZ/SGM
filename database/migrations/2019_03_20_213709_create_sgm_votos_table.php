<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmVotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_votos', function(Blueprint $table)
		{
			$table->integer('id_votos');
			$table->integer('fk_respostas')->index('fk_sgm_votos_sgm_respostas1_idx');
			$table->integer('fk_estudante')->index('fk_sgm_votos_sgm_estudantes1_idx');
			$table->integer('fk_pergunta')->index('fk_sgm_votos_sgm_perguntas1_idx');
			$table->primary(['id_votos','fk_estudante']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_votos');
	}

}
