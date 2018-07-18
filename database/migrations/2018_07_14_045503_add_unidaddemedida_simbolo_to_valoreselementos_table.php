<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnidaddemedidaSimboloToValoreselementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valoreselementos', function (Blueprint $table) {
    $table->string('unidaddemedida_simbolo',8)->after('elementos_id')->nullable();
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
            $table->dropColumn('unidaddemedida_simbolo');
        });
    }
}
