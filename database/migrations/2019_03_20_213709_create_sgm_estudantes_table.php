<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmEstudantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_estudantes', function(Blueprint $table)
		{
			$table->integer('id_estudante');
			$table->integer('fk_curso')->index('fk_sgm_estudantes_sgm_cursos_idx');
			$table->string('primeiro_nome', 45);
			$table->string('sobrenome', 45);
			$table->string('matricula', 45);
			$table->string('email', 45);
			$table->integer('periodo');
			$table->string('tipo', 45);
			$table->primary(['id_estudante','fk_curso']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_estudantes');
	}

}
