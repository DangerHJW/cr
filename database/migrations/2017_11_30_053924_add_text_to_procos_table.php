<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTextToProcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('procos', function (Blueprint $table) {
            //
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('procos', function (Blueprint $table) {
            //
            $table->dropColumn('text1');
            $table->dropColumn('text2');
            $table->dropColumn('text3');
        });
    }
}
