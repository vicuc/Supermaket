<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hang', function (Blueprint $table) {
             $table->increments('id');
            
            $table->string('ma_donhang');
            $table->string('name_order');
            $table->integer('phone_order');
            $table->string('city_order');
            $table->string('diachi_order');

            
            $table->integer('trang_thai');
            

            

            $table->integer('id_khachhang')->unsigned()->nullable();
            $table->foreign('id_khachhang')
                    ->references('id')
                    ->on('tai_khoan')
                    ->onDelete('cascade');

            $table->integer('nguoi_duyet')->unsigned()->nullable();
            $table->foreign('nguoi_duyet')
                    ->references('id')
                    ->on('tai_khoan')
                    ->onDelete('cascade');

            $table->dateTime('ngay_dat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_hang');
    }
}
