<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Location extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->increments('MaL');
            $table->unsignedInteger('District');
            $table->foreign('District')->references('MaD')->on('district');
            $table->string('TenSan', 50);
            $table->string('Location', 75);
            // $table->unsignedInteger('SoSan');
            // $table->foreign('SoSan')->references('MaG')->on('ground');
            $table->text('Describe');
            $table->string('Image', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('location');
    }
}
