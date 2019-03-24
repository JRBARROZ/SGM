<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSgmCadeirasCursandoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cadeiras_cursando', function(Blueprint $table)
		{
			$table->bigIncrements('id')->primary();

			// fk da tabela  users
			$table->integer('fk_user')->unsigned();
			$table->foreign('fk_user')->index('id')->on('users')->onDelete('cascade');

			// fk da tabela cursos			
			$table->integer('fk_curso')->unsigned();
			$table->foreign('fk_curso')->index('id')->on('cursos')->onDelete('cascade');
			
			// fk da tabela cadeiras
			$table->integer('fk_cadeira')->unsigned();
			$table->foreign('fk_cadeira')->index('id')->on('cadeiras')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sgm_cadeiras_cursando');
	}

}
