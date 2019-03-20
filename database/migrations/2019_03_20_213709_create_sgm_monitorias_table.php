<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmMonitoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_monitorias', function(Blueprint $table)
		{
			$table->integer('id_monitorias');
			$table->integer('fk_estudante')->index('fk_sgm_monitorias_sgm_estudantes1_idx');
			$table->integer('fk_cadeira')->index('fk_sgm_monitorias_sgm_cadeiras1_idx');
			$table->integer('fk_curso')->index('fk_sgm_monitorias_sgm_cursos1_idx');
			$table->date('data');
			$table->time('hora_inicio');
			$table->time('hora_fim');
			$table->string('titulo', 45);
			$table->string('descricao');
			$table->primary(['id_monitorias','fk_estudante','fk_cadeira','fk_curso']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_monitorias');
	}

}
