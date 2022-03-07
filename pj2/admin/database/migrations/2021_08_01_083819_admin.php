<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // schema thư viện laravel hỗ trợ các hành động của bảng
        Schema::create('admin', function (Blueprint $table) {
            # $table->id(); id tự tăng và có kiểu dữ liệu là big int primary key
            $table->increments('MaA'); // tự tăng kiểu dữ liệu là int primary key
            $table->string('FullNameA', 30); //varchar
            //tinyint: leng 4 ->1234
            //boolean : tinyint leng 1->2
            $table->string('EmailA', 30)->unique();
            $table->string('PassA', 30);
            $table->date('DoBA');
            $table->char('SdtA', 10)->unique();
            $table->tinyInteger('BanA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin');
    }
}
