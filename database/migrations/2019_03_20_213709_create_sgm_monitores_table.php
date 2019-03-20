<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmMonitoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_monitores', function(Blueprint $table)
		{
			$table->integer('id_monitor');
			$table->integer('fk_estudante')->index('fk_monitores_sgm_estudantes1_idx');
			$table->integer('fk_curso')->index('fk_monitores_sgm_cursos1_idx');
			$table->integer('fk_servidor')->index('fk_monitores_sgm_servidores1_idx');
			$table->integer('fk_cadeira')->index('fk_monitores_sgm_cadeiras1_idx');
			$table->primary(['id_monitor','fk_estudante','fk_curso','fk_servidor','fk_cadeira']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_monitores');
	}

}
