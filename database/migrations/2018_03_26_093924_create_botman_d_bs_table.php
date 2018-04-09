<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotmanDBsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botman_d_bs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('webact');
            $table->string('webname');
            $table->string('webbrand');
            $table->string('webheader');
            $table->string('webheaderpara');
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
        Schema::dropIfExists('botman_d_bs');
    }
}
