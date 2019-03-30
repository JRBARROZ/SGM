<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerguntasRespostasIdOnVotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('votos', function (Blueprint $table) {
            //Create perguntas and respostas foreign key.

            //Foreign-key --> (Perguntas) <--
            $table->integer('perguntas_id')->unsigned();
            $table->foreign('perguntas_id')->references('id')->on('perguntas');
            
            //Foreign-key --> (Respostas) <--
            $table->integer('respostas_id')->unsigned();
            $table->foreign('respostas_id')->references('id')->on('respostas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votos', function (Blueprint $table) {
            //Drop perguntas and cadeiras foreign key, and column.
            $table->dropForeign(['perguntas_id'], ['respostas_id']);
            $table->dropColumn(['perguntas_id'], ['respostas_id']);
        });
    }
}
