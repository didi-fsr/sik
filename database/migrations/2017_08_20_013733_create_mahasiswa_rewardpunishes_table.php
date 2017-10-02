<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaRewardpunishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mahasiswa_rewardpunish', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('rewardpunish_id')->unsigned()->nullable();
            $table->foreign('rewardpunish_id')->references('id')
                  ->on('rewardpunishes')->onDelete('cascade');
            $table->integer('mahasiswa_id')->unsigned()->nullable();
            $table->foreign('mahasiswa_id')->references('id')
                  ->on('mahasiswa')->onDelete('cascade');

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
        Schema::dropIfExists('mahasiswa_rewardpunishes');
    }
}
