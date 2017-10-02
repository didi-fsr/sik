<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePamongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pamong',function (Blueprint $table){
        $table->increments('id_pamong');
        $table->string('nama_pamong',50);
        $table->boolean('katim');
        $table->char('tim_id',1);
        $table->char('pamong_tk',1);
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
        Schema::dropIfExists('pamong');
    }
}
