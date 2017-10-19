<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MaDienThoai')->unique();
            $table->string('TenDienThoai');
            $table->string('HangSX');
            $table->integer('SoLuongConLai');
            $table->integer('GiaBan');
            $table->string('ManHinh')->nullable();
            $table->string('HeDieuHanh')->nullable();
            $table->string('CameraTruoc')->nullable();
            $table->string('CameraSau')->nullable();
            $table->integer('RAM')->nullable();
            $table->integer('ROM')->nullable();
            $table->string('CPU')->nullable();
            $table->integer('Pin')->nullable();
            $table->string('Khac')->nullable();
            $table->string('MoTa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
