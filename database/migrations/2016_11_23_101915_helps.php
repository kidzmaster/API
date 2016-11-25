<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Helps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('helps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('ruler_id');
            $table->integer('min');
            $table->integer('max');
            $table->text('content');
            $table->string('status');       
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
        Schema::drop('helps');   
    }
}
