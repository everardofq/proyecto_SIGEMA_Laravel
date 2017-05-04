<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('matricula');
            $table->string('correo');
            $table->string('telefono');
            $table->string('lugar_de_procedencia');
            $table->string('generacion');
            $table->string('titulo_de_tesis');
            $table->string('asesor');
            $table->string('maximo_grado_de_estudio');
            $table->string('experienciaLab');
            $table->string('nombre_maestria');
            $table->string('ins_estudio_maestria');
            $table->string('ubicacion_ins_maestria');
            $table->string('linea_inv_maestria');
            $table->string('nombre_doctorado');
            $table->string('ins_estudio_doctorado');
            $table->string('ubicacion_ins_doctorado');
            $table->string('linea_inv_doctorado');
            $table->string('periodo_de_maestria');
            $table->string('periodo_de_doctorado');
            $table->string('comentarios_sugerencias');
            
            $table->date('fecha_de_ingreso');
            $table->date('fecha_de_egreso');
            $table->date('fecha_de_titulacion');

            $table->integer('es_titulado');
            $table->integer('tiene_posgrado');

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
        Schema::dropIfExists('egresados');
    }
}
