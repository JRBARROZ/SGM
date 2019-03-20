<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSgmMonitoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sgm_monitores', function(Blueprint $table)
		{
			$table->foreign('fk_cadeira', 'fk_monitores_sgm_cadeiras1')->references('id_cadeira')->on('sgm_cadeiras')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fk_curso', 'fk_monitores_sgm_cursos1')->references('id_curso')->on('sgm_cursos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fk_estudante', 'fk_monitores_sgm_estudantes1')->references('id_estudante')->on('sgm_estudantes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fk_servidor', 'fk_monitores_sgm_servidores1')->references('id_servidor')->on('sgm_servidores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sgm_monitores', function(Blueprint $table)
		{
			$table->dropForeign('fk_monitores_sgm_cadeiras1');
			$table->dropForeign('fk_monitores_sgm_cursos1');
			$table->dropForeign('fk_monitores_sgm_estudantes1');
			$table->dropForeign('fk_monitores_sgm_servidores1');
		});
	}

}
