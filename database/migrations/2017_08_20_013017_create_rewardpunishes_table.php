<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardpunishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewardpunishes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('kasus');
            $table->text('detil_kasus');
            $table->char('r_or_p',1);
            $table->string('hukuman',100);
            $table->integer('bobot');
            $table->date('start_pun');
            $table->date('end_pun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rewardpunishes');
    }
}
