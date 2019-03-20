<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSgmEstudantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sgm_estudantes', function(Blueprint $table)
		{
			$table->foreign('fk_curso', 'fk_sgm_estudantes_sgm_cursos')->references('id_curso')->on('sgm_cursos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sgm_estudantes', function(Blueprint $table)
		{
			$table->dropForeign('fk_sgm_estudantes_sgm_cursos');
		});
	}

}
