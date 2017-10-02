<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjinfasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::create('ijinfasilitass', function (Blueprint $table){
        //   $table->increments('id');
        //   // $table->string('pemohon',40);
        //   $table->char('fasilitas');
        //   $table->datetime('mulai');
        //   $table->datetime('selesai');
        //   $table->string('perlu',100);
        //   $table->string('ket',100);
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
    }
}
