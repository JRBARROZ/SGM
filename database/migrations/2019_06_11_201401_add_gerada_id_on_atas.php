<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGeradaIdOnAtas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atas', function (Blueprint $table) {
            $table->integer('gerada_id')->unsigned();
            $table->foreign('gerada_id')->references('id')->on('geradas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atas', function (Blueprint $table) {
            $table->dropForeign(['gerada_id']);
            $table->dropColumn('gerada_id');
        });
    }
}
