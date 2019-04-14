<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCadeiraToMonitorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monitorias', function (Blueprint $table) {
            //fk da coluna cadeiras para monitorias
            $table->integer('cadeira_id')->unsigned()->nullable();
            $table->foreign('cadeira_id')->references('id')->on('cadeiras');
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
            $table->dropForeign(['cadeira_id']);
            $table->dropColumn('cadeira_id');
        });
    }
}
