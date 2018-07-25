<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteTipoalertaIdToProductofaseelementorangoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productofaseelementorango', function (Blueprint $table) {
          $table->dropPrimary('tipoproducto_id');
          $table->dropPrimary('fasefenologica_id');
          $table->dropPrimary('elementos_id');
          $table->dropPrimary('unidaddemedida_id');
          $table->primary(array('tipoproducto_id', 'fasefenologica_id' , 'elementos_id' ,'unidaddemedida_id','tipodealerta_id'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productofaseelementorango', function (Blueprint $table) {
          $table->dropPrimary('tipoproducto_id');
          $table->dropPrimary('fasefenologica_id');
          $table->dropPrimary('elementos_id');
          $table->dropPrimary('unidaddemedida_id');
          $table->dropPrimary('tipodealerta_id');
        });
    }
}
