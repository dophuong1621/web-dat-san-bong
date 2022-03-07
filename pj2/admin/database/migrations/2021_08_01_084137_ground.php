<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ground extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ground', function (Blueprint $table) {
            $table->increments('MaG');
            $table->integer('SoSan');
            // $table->foreign('SoSan')->references('MaL')->on('location');
            $table->integer('Price');
            $table->unsignedInteger('MaGL');
            $table->foreign('MaGL')->references('MaL')->on('location');
            // $table->text('Describe');
            // $table->string('Image', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::down('ground');
    }
}
