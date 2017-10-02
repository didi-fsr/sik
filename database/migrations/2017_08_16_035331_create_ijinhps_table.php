<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjinhpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijinhps', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('merk', 20);
            $table->string('tipe', 20);
            $table->string('prosesor', 20);
            $table->string('os', 20);
            $table->string('memori_int', 20);
            $table->string('memori_eks', 20);
            $table->string('layar', 20);
            $table->string('kebutuhan', 20);
            $table->string('harga_baru', 20);
            $table->string('sumber', 20);
            $table->bigInteger('nomor_telepon')->unsigned();
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
        Schema::dropIfExists('ijinhps');
    }
}
