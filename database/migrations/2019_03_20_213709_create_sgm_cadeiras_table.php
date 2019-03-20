<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmCadeirasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_cadeiras', function(Blueprint $table)
		{
			$table->integer('id_cadeira');
			$table->integer('fk_curso')->index('fk_sgm_cadeiras_sgm_cursos1_idx');
			$table->integer('fk_servidor')->nullable()->index('fk_sgm_cadeiras_sgm_servidores1_idx');
			$table->string('nome', 45);
			$table->integer('periodo');
			$table->primary(['id_cadeira','fk_curso']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_cadeiras');
	}

}
