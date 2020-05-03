<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CtDonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_don_hang', function (Blueprint $table) {
           $table->increments('id');
            
            $table->integer('gia_donhang');
            $table->integer('so_luong_sp');

            $table->integer('id_donhang')->unsigned()->nullable();
            $table->foreign('id_donhang')
                    ->references('id')
                    ->on('don_hang')
                    ->onDelete('cascade');


            $table->integer('id_hanghoa')->unsigned()->nullable();
            $table->foreign('id_hanghoa')
                    ->references('id')
                    ->on('hang_hoa')
                    ->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_don_hang');
    }
}
