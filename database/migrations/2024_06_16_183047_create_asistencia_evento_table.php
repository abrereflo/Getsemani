<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_evento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_evento')->constrained('eventos');
            $table->foreignId('id_miembro')->constrained('miembros');
            $table->boolean('asistio');
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
        Schema::dropIfExists('asistencia_evento');
    }
}
