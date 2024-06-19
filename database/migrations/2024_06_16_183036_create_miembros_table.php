<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->date('fecha_de_nacimiento');
            $table->string('estado_civil', 20);
            $table->integer('numero_de_hijos');
            $table->string('nivel_academico', 50);
            $table->string('ocupacion', 50);
            $table->string('habilidad', 100);
            $table->string('dones', 100);
            $table->date('fecha_de_bautizo');
            $table->foreignId('id_ministerio')->constrained('ministerios');
            $table->integer('tiempo_de_asistencia_iglesia');
            $table->foreignId('id_como_conociste')->constrained('como_conociste');
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
        Schema::dropIfExists('miembros');
    }
}
