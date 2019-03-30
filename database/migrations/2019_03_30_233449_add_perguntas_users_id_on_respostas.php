<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerguntasUsersIdOnRespostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('respostas', function (Blueprint $table) {
            //Create users and respostas foreign key.

            //Foreign-key --> (Users) <--

            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');

            //Foreign-key --> (Perguntas) <--
            $table->integer('perguntas_id')->unsigned();
            $table->foreign('perguntas_id')->references('id')->on('perguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('respostas', function (Blueprint $table) {
            //Drop users and perguntas foreign key, and column.
            $table->dropForeign(['users_id'], ['perguntas_id']);
            $table->dropColumn(['users_id'], ['perguntas_id']);
        });
    }
}
