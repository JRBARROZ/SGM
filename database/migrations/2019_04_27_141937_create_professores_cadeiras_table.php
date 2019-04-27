<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresCadeirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores_cadeiras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            // fk da tabela  users

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // fk da tabela cadeiras

            $table->integer('cadeira_id')->unsigned();
            $table->foreign('cadeira_id')->references('id')->on('cadeiras')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professores_cadeiras');
    }
}
