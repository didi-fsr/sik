<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePamongbtgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pamongbtgss', function (Blueprint $table){
          $table->increments('id');
          // $table->string('pemohon',40);
          $table->date('tgl');
          // $table->integer('pamong_tk1')->unsigned();
          // $table->foreign('pamong_tk1')->references('id_pamong')->on('pamong');
          // $table->integer('pamong_tk2')->unsigned();
          // $table->foreign('pamong_tk2')->references('id_pamong')->on('pamong');
          // $table->integer('pamong_tk3')->unsigned();
          // $table->foreign('pamong_tk3')->references('id_pamong')->on('pamong');
          // $table->integer('pamong_tk4')->unsigned();
          // $table->foreign('pamong_tk4')->references('id_pamong')->on('pamong');
          $table->string('tk1');
          $table->string('tk2');
          $table->string('tk3');
          $table->string('tk4');
          // $table->boolean('bertugas');
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
