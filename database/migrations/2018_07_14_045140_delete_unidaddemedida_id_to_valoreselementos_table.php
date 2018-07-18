<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteUnidaddemedidaIdToValoreselementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valoreselementos', function (Blueprint $table) {
            $table->dropColumn('unidaddemedida_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valoreselementos', function (Blueprint $table) {
              $table->integer('unidaddemedida_id')->nullable();
        });
    }
}
