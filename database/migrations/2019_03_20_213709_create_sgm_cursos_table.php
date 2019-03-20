<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sgm_cursos', function(Blueprint $table)
		{
			$table->integer('id_curso')->primary();
			$table->integer('fk_servidor')->nullable()->index('fk_sgm_cursos_sgm_servidores1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_cursos');
	}

}
