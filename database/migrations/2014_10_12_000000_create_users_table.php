<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sobrenome');
            $table->enum('tipo', ['aluno', 'monitor', 'professor', 'admin'])->default('aluno');
            $table->string('matricula')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('periodo')->nullable();
            $table->integer('periodo_monitoria')->nullable();
            $table->enum('cargo', ['bolsista', 'voluntario'])->nullable();
            $table->string('password');
            $table->string('avatar')->default('avatar.png');
            $table->string('capa')->default('capa.jpg');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
