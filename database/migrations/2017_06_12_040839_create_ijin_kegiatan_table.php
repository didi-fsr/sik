<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjinKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('ijinkegiatans', function (Blueprint $table){
          $table->increments('id');
          $table->string('nama_giat',100);
          $table->string('desc');
          $table->timestamps();
          $table->char('status',1);
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
        Schema::drop('ijinkegiatans');
    }
}
