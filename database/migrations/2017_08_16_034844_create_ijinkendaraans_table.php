<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjinkendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijinkendaraans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('merk', 20);
            $table->string('tipe', 20);
            $table->string('nomor_plat', 30);
            $table->boolean('berlaku');
            $table->integer('id_pd')->unsigned();
            $table->foreign('id_pd')->references('id')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ijinkendaraans');
    }
}
