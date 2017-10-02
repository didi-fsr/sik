<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kelas_mahasiswa', function(Blueprint $table)
  {
      $table->integer('tahun');
      $table->integer('kelas_id')->unsigned()->nullable();
      $table->foreign('kelas_id')->references('id')
            ->on('kelas')->onDelete('cascade');
      $table->integer('mahasiswa_id')->unsigned()->nullable();
      $table->foreign('mahasiswa_id')->references('id')
            ->on('mahasiswa')->onDelete('cascade');
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
        //
        Schema::dropIfExists('kelas_mahasiswa');
    }
}
