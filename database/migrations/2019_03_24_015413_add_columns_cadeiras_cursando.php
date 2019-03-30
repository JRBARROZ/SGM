<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsCadeirasCursando extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cadeiras_cursando', function (Blueprint $table) {

            // fk da tabela  users

            $table->integer('fk_user')->unsigned();
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
            
            // fk da tabela cursos	

            $table->integer('fk_curso')->unsigned();
            $table->foreign('fk_curso')->references('id')->on('cursos')->onDelete('cascade');
            
            // fk da tabela cadeiras

            $table->integer('fk_cadeira')->unsigned();
            $table->foreign('fk_cadeira')->references('id')->on('cadeiras')->onDelete('cascade');
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
            
            $table->dropForeign(['fk_user', 'fk_curso', 'fk_cadeira']);
            $table->dropColumn(['fk_user', 'fk_curso', 'fk_cadeira']);

        });
    }
}
