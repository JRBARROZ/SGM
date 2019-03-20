<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSgmCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sgm_cursos', function(Blueprint $table)
		{
			$table->foreign('fk_servidor', 'fk_sgm_cursos_sgm_servidores1')->references('id_servidor')->on('sgm_servidores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sgm_cursos', function(Blueprint $table)
		{
			$table->dropForeign('fk_sgm_cursos_sgm_servidores1');
		});
	}

}
