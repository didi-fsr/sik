<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamRwdPunishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::create('rwd_punish', function (Blueprint $table){
        //   $table->increments('id_rwd_punish');
        //   $table->string('kasus');
        //   $table->text('detil_kasus');
        //   $table->char('r_or_p',1);
        //   $table->string('hukuman',100);
        //   $table->integer('bobot');
        //   $table->date('start_pun');
        //   $table->date('end_pun');
        //   $table->integer('id_pd')->unsigned();
        //   $table->foreign('id_pd')->references('id_pd')->on('mahasiswa');
        // });
        Schema::table('rwd_punish', function (Blueprint $table){
          $table->integer('id_pd')->unsigned();
          $table->foreign('id_pd')->references('id_pd')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('rwd_punish');
    }
}
