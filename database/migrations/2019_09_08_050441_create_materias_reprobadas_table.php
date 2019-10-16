<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasReprobadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_reprobadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre_alumno');
            $table->string('Nombre_Materia');
            $table->string('plan_de_estudios');
            
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
        Schema::dropIfExists('materias_reprobadas');
    }
}
