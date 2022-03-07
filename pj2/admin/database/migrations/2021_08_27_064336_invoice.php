<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('MaI');
            $table->unsignedInteger('MaIU');
            $table->foreign('MaIU')->references('MaU')->on('user');
            $table->unsignedInteger('MaIG');
            $table->foreign('MaIG')->references('MaG')->on('ground');
            $table->unsignedInteger('MaIT');
            $table->foreign('MaIT')->references('MaT')->on('time');
            $table->integer('Price');
            $table->date('Ngaydat');
            $table->text('Note');
            $table->tinyInteger('Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::down('invoice');
    }
}
