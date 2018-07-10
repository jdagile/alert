<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionesalertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacionesalertas', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('valoreselementos_id')->references('id')->on('valoreselementos');
          $table->integer('tipodealerta_id')->references('id')->on('tipodealerta');
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
        Schema::dropIfExists('estacionesalertas');
    }
}
