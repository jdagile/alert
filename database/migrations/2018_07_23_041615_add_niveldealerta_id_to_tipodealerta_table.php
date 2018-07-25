<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNiveldealertaIdToTipodealertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipodealerta', function (Blueprint $table) {
          Schema::create('niveldealerta', function (Blueprint $table) {
          $table->increments('id');
          $table->string('descripcion',100);
          $table->integer('id_usuariocreo');
          $table->integer('id_usuariomodifico')->nullable();
          $table->timestamps();
                });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipodealerta', function (Blueprint $table) {
            //
        });
    }
}
