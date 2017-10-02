<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id_pd');
            $table->string('nm_pd');
            $table->char('jk',1);
            $table->char('npm',20)->unique();
            $table->char('nisn',10)->unique();
            $table->string('tmpt_lahir',20);
            $table->date('tgl_lahir');
            //$table->integer('id_agama')->unsigned();
            //$table->foreign('id_agama')->references('id_agama')->on('agama');
            $table->string('jln',80);
            $table->tinyInteger('rt');
            $table->tinyInteger('rw');
            $table->string('nm_dsn',40)->nullable();
            $table->string('ds_kel',40);
            //$table->char('id_wil',8);
            //$table->foreign('id_wil')->references('id_wil')->on('wilayah');
            $table->char('kode_pos',5);
            $table->integer('id_kendaraan')->unsigned();
            $table->string('tlp_rumah',20);
            $table->string('tlp_hp',20);
            $table->string('email',50);
            $table->char('stat_pd',1);
            $table->string('nm_ayah',50);
            $table->date('tgl_lahr_ayah');
            $table->integer('id_jenjang_pendidikan_ayah');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('mahasiswa');
    }
}
