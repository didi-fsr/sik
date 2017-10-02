<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetilAlamatToMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('mahasiswa', function (Blueprint $table){
          $table->string('prov',30)->after('ds_kel')->change();
          $table->string('kota_kab',30)->after('ds_kel')->change();
          $table->string('kec',30)->after('ds_kel')->change();
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
