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
		Schema::create('sgm_cadeiras_cursando', function(Blueprint $table)
		{
			$table->integer('id_cadeira_cursando', true);
			$table->integer('fk_estudante');
			$table->integer('fk_curso');
			$table->integer('fk_cadeira')->index('fk_sgm_cadeiras_cursando_sgm_cadeiras1_idx');
			$table->primary(['id_cadeira_cursando','fk_estudante','fk_curso','fk_cadeira']);
			$table->index(['fk_estudante','fk_curso'], 'fk_sgm_cadeiras_cursando_sgm_estudantes1_idx');
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
