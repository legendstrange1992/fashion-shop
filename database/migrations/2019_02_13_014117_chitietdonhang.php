<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietdonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->increments('stt');
            $table->integer('id_donhang');
            $table->integer('id_sanpham');
            $table->string('style');
            $table->string('tensanpham');
            $table->string('hinh');
            $table->integer('soluong');
            $table->integer('dongia');
            $table->integer('thanhtien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdonhang');
    }
}
