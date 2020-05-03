<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HangHoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hang_hoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ms_hh');
            $table->string('ten_hh');
            $table->integer('gia_hh');
            $table->integer('gia_km')->nullable();
            $table->integer('soluong_hang');
            $table->integer('soluong_hang')->nullable();
            $table->integer('trong_luong')->nullable();



            $table->integer('ma_nhom')->unsigned();
            $table->foreign('ma_nhom')
                    ->references('id')
                    ->on('nhom_hang_hoa')
                    ->onDelete('cascade');



            $table->string('hinh_anh');
            $table->text('mo_ta');

            $table->dateTime('ngay_lap');

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
        Schema::dropIfExists('hang_hoa');
    }
}
