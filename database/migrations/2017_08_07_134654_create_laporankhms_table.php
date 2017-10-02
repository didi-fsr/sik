<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporankhmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporankhms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_khm')->unsigned();
            $table->foreign('id_khm')->references('id')->on('khms');
            $table->integer('id_pd')->unsigned();
            $table->foreign('id_pd')->references('id_pd')->on('mahasiswa');
            $table->boolean('hadir');
            $table->boolean('sakit');
            $table->boolean('tanpa_ket');
            $table->boolean('terlambat');
            $table->boolean('ijin');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporankhms');
    }
}
