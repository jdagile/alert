<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoreselementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoreselementos', function (Blueprint $table) {
          $table->integer('estaciones_id')->references('id')->on('esaciones');
          $table->integer('elementos_id')->references('id')->on('elementos');
          $table->integer('unidaddemedida_id')->references('id')->on('unidaddemedida');
          $table->timestamp('fechaestacion') ;
          $table->decimal('valor',18,4) ;
          $table->boolean('estaactivo');
          $table->integer('dia');
          $table->integer('mes');
          $table->integer('anio');
          $table->timestamps();
          $table->primary(array('estaciones_id', 'elementos_id' , 'fechaestacion'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valoreselementos');
    }
}
