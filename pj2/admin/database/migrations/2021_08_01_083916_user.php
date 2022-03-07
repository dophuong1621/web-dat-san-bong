<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            # $table->id(); id tự tăng và có kiểu dữ liệu là big int primary key
            $table->increments('MaU'); // tự tăng kiểu dữ liệu là int primary key
            $table->string('TenU', 30); //varchar
            //tinyint: leng 4 ->1234
            //boolean : tinyint leng 1->2
            $table->string('PassU', 30);
            $table->date('DoBU');
            $table->string('EmailU', 50)->unique();
            $table->char('SdtU', 10)->unique();
            $table->tinyInteger('BanU');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
