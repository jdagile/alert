<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipodeproductoIdToFasefenologicamesalertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasefenologicamesalerta', function (Blueprint $table) {
        $table->integer('tipodeproducto_id')->after('fasefenologica_id')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasefenologicamesalerta', function (Blueprint $table) {
          $table->dropColumn('tipodeproducto_id');
        });
    }
}
