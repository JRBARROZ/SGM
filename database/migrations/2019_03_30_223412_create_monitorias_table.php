<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorias', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->string('titulo');
            $table->mediumText('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitorias');
    }
}
