<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSgmPerguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sgm_perguntas', function(Blueprint $table)
		{
			$table->foreign('fk_estudante', 'fk_sgm_perguntas_sgm_estudantes1')->references('id_estudante')->on('sgm_estudantes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sgm_perguntas', function(Blueprint $table)
		{
			$table->dropForeign('fk_sgm_perguntas_sgm_estudantes1');
		});
	}

}
