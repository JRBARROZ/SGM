<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmRespostasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_respostas', function(Blueprint $table)
		{
			$table->integer('id_respostas');
			$table->integer('fk_pergunta')->index('fk_sgm_respostas_sgm_perguntas1_idx');
			$table->integer('fk_estudante')->index('fk_sgm_respostas_sgm_estudantes1_idx');
			$table->string('texto', 45);
			$table->primary(['id_respostas','fk_pergunta','fk_estudante']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_respostas');
	}

}
