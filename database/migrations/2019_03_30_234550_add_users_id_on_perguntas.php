<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersIdOnPerguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perguntas', function (Blueprint $table) {
            //Create users foreign key and column

            //Foreign-key --> (Users) <--
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perguntas', function (Blueprint $table) {
            //Drop users foreign key and column.
            $table->dropForeign(['users_id']);
            $table->dropColumn(['users_id']);
        });
    }
}
