<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa');
            $table->string('direccion');
            $table->string('puesto');
            $table->string('telefono');
            $table->string('nombre_jefe');
            $table->string('puesto_jefe');
            
            $table->integer('viaje_practicas');
            $table->integer('estancias_profesionales');
            $table->integer('educativa');
            $table->integer('privada');
            $table->integer('gubernamental');

            $table->integer('egresado_id')->unsigned();
            $table->foreign('egresado_id')->references('id')->on('egresados');

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
        Schema::dropIfExists('empleos');
    }
}
