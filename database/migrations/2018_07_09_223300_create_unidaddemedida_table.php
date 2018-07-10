<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidaddemedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidaddemedida', function (Blueprint $table) {
         $table->string('simbolo',8)->unique();
          $table->string('descripcion',100);
          $table->boolean('estaactivo');
          $table->integer('id_usuariocreo');
          $table->integer('id_usuariomodifico')->nullable();
          $table->timestamps();
          $table->primary(['simbolo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidaddemedida');
    }
}
