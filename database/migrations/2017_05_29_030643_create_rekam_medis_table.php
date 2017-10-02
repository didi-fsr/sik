<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::create('rekam_medis', function (Blueprint $table){
           $table->increments('id_rekmed');
           $table->date('tgl_rekam');
           $table->date('tgl_update');
           $table->string('penyakit',50);
           $table->string('keterangan',100);
           $table->boolean('status_sakit');
           $table->integer('id_pd')->unsigned();
           $table->foreign('id_pd')->references('id_pd')->on('mahasiswa');
         });
        // Schema::table('rekam_medis',  function(Blueprint $table){
        //   $table->integer('id_pd')->unsigned();
        //   $table->foreign('id_pd')->references('id_pd')->on('mahasiswa');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('rekam_medis');
    }
}
