<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxiliaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliary', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->foreign('id_Receta')->references('idReceta')->on('recipes');
			$table->foreign('id_Fruta')->references('idFruta')->on('fruits');
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
        Schema::dropIfExists('auxiliary');
    }
}
