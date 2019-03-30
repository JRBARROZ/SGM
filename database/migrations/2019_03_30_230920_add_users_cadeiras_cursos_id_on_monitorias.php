<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersCadeirasCursosIdOnMonitorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monitorias', function (Blueprint $table) {
            
            //Create users, cadeiras, cursos foreign key.

            //Foreign-key --> (Users) <--
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            
            //Foreign-key --> (Cadeiras) <--
            $table->integer('cadeiras_id')->unsigned();
            $table->foreign('cadeiras_id')->references('id')->on('cadeiras');
            
            //Foreign-key --> (Cursos) <--
            $table->integer('cursos_id')->unsigned();
            $table->foreign('cursos_id')->references('id')->on('cursos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monitorias', function (Blueprint $table) {
            //Drop users, cadeiras, cursos foreign key and column.
            $table->dropForeign(['users_id'], ['cadeiras_id'], ['cursos_id']);
            $table->dropColumn(['users_id'], ['cadeiras_id'], ['cursos_id']);
        });
    }
}
