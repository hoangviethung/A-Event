<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ten_su_kien');
            $table->integer('id_loai');
            $table->string('banner');
            $table->Datetime('ngay_dien_ra');
            $table->Datetime('ngay_ket_thuc');
            $table->integer('anh_su_kien');
            $table->Float('gia_ve');
            $table->string('dia_chi');
            $table->Datetime('ngay_ban');
            $table->text('mo_ta');
            $table->integer('so_luong_ve');


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
        Schema::dropIfExists('events');
    }
}
