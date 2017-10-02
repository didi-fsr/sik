<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjinlaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijinlaptops', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('merk', 20);
            $table->string('tipe', 20);
            $table->string('prosesor', 30);
            $table->string('memori', 30);
            $table->string('grafis', 30);
            $table->string('hardisk', 30);
            $table->string('daya', 30);
            $table->string('opticaldrive', 30);
            $table->string('nic_lan', 50);
            $table->string('nic_wlan', 50);
            $table->string('nic_modem', 50);
            $table->string('monitor', 20);
            $table->string('printer', 20);
            $table->string('ext_hd', 20);
            $table->string('ext_modem', 20);
            $table->string('os', 30);
            $table->string('antivirus', 30);
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
        Schema::dropIfExists('ijinlaptops');
    }
}
