<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSgmCadeirasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sgm_cadeiras', function(Blueprint $table)
		{
			$table->foreign('fk_curso', 'fk_sgm_cadeiras_sgm_cursos1')->references('id_curso')->on('sgm_cursos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fk_servidor', 'fk_sgm_cadeiras_sgm_servidores1')->references('id_servidor')->on('sgm_servidores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sgm_cadeiras', function(Blueprint $table)
		{
			$table->dropForeign('fk_sgm_cadeiras_sgm_cursos1');
			$table->dropForeign('fk_sgm_cadeiras_sgm_servidores1');
		});
	}

}
