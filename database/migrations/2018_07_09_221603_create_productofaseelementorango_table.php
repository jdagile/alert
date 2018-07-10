<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductofaseelementorangoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productofaseelementorango', function (Blueprint $table) {

          $table->integer('tipoproducto_id')->references('id')->on('tipoproducto');
          $table->integer('fasefenologica_id')->references('id')->on('fasefenologica');
          $table->integer('elementos_id')->references('id')->on('elementos');
          $table->integer('unidaddemedida_id')->references('id')->on('unidaddemedida');
          $table->decimal('valorminimo',18,4) ;
          $table->decimal('valormaximo',18,4) ;
          $table->boolean('estaactivo');

          $table->timestamps();
          $table->primary(array('tipoproducto_id', 'fasefenologica_id' , 'elementos_id' ,'unidaddemedida_id'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productofaseelementorango');
    }
}
