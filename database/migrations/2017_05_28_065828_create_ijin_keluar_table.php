<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjinKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('ijin_keluar', function (Blueprint $table){
        //   $table->increments('id_ik');
        //   $table->string('tujuan',100);
        //   $table->datetime('berangkat');
        //   $table->datetime('ren_kembali');
        //   $table->datetime('kembali');
        //   $table->integer('nama');
        //   $table->foreign('nama')->references('nm_pd')->on('mahasiswa');
        //   $table->string('kelas');
        //   $table->foreign('kelas')->references('aka_kelas')->on('kelas');
        // });
        Schema::table('ijin_keluar', function (Blueprint $table){
          //$table->dropcolumn('nama');
          //$table->integer('id_pd')->unsigned();
          //$table->foreign('id_pd')->references('id_pd')->on('mahasiswa');
          });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
