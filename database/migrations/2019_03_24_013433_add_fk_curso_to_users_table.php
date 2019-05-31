<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkCursoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //fk da coluna cursos para users
            $table->integer('fk_curso')->unsigned()->nullable();
			$table->foreign('fk_curso')->references('id')->on('cursos')->onDelete('cascade')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['fk_curso']);
            $table->dropColumn('fk_curso');
        });
    }
}
