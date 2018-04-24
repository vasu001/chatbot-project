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
            $table->string('userName')->nullable();
            $table->string('webTemplate')->nullable();
            $table->string('webTitle')->nullable();
            $table->string('webpageBrand')->nullable();
            $table->string('welcomeHeading')->nullable();
            $table->string('welcomeHeadingDesignation')->nullable();
            $table->string('welcomeTextPara')->nullable();
            $table->string('aboutCatchPhrase')->nullable();
            $table->string('aboutCatchPhraseSideLine')->nullable();
            $table->string('aboutTextPara')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('birthday')->nullable();
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
