<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasefenologicamesalertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasefenologicamesalerta', function (Blueprint $table) {
          $table->integer('fasefenologica_id')->references('id')->on('fasefenologica');
          $table->integer('meses_id')->references('id')->on('meses');
          $table->integer('tipodealerta_id')->references('id')->on('tipodealerta');
          $table->boolean('estaactivo');
          $table->integer('id_usuariocreo');
          $table->integer('id_usuariomodifico')->nullable();
          $table->timestamps();
          $table->primary(array('fasefenologica_id', 'meses_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasefenologicamesalerta');
    }
}
