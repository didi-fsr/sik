<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMahasiswaDetailColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table){
          $table->dropColumn(['nm_ayah','tgl_lahr_ayah','id_jenjang_pendidikan_ayah']);
        });

        Schema::table('mahasiswa', function (Blueprint $table){
          $table->string('agama',20);
          $table->tinyInteger('angkatan');
          $table->string('nm_ayah',50);
          $table->string('tmpt_lahir_ayah',30);
          $table->date('tgl_lahir_ayah');
          $table->string('pekerjaan_ayah',30);
          $table->string('nm_ibu',50);
          $table->string('tmpt_lahir_ibu',30);
          $table->date('tgl_lahir_ibu');
          $table->string('pekerjaan_ibu',30);
          $table->string('alamat_ortu');
          $table->string('kontak_ortu',12);
          $table->string('nm_wali',50);
          $table->string('alamat_wali');
          $table->string('kontak_wali',12);
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
    }
}
