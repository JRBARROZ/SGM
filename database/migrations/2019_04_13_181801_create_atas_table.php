<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome');
            $table->date('data');
            $table->integer('monitor_id');
            //Foreign User
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
            //Foreign Curso
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');
            //Foreign Cadeira
            $table->integer('cadeira_id')->unsigned();
            $table->foreign('cadeira_id')->references('id')->on('cadeiras');

            //Foreign Monitoria
            $table->integer('monitoria_id')->unsigned();
            $table->foreign('monitoria_id')->references('id')->on('monitorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atas');
    }
}
