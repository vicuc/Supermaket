<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaiKhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_kh')->nullable();
            $table->string('ma_nv')->nullable();
            $table->string('username');
            $table->string('ten_user');

            $table->string('password');
            $table->string('email');
            $table->integer('phone');
            $table->integer('trang_thai')->nullable();
            $table->string('level');


            $table->dateTime('create');
            $table->dateTime('update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoan');
    }
}
