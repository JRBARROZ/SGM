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
		Schema::create('cadeiras', function(Blueprint $table)
		{
			$table->bigIncrements('id')->primary();

			// fk a tabela cursos
			$table->integer('fk_curso')->unsigned();
			$table->foreign('fk_curso')->references('id')->on('cursos')->onDelete('cascade');

			$table->string('nome');
			$table->integer('periodo');
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
