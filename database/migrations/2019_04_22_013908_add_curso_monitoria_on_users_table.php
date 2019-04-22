<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCursoMonitoriaOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //fk do curso em que o aluno é monitor
            $table->integer('curso_monitoria')->unsigned();
            $table->foreign('curso_monitoria')->references('id')->on('cursos')->onDelete('cascade')->nullable()->change();
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
            $table->dropForeign(['curso_monitoria']);
            $table->dropColumn('curso_monitoria');
        });
    }
}
