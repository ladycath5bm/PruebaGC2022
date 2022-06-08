<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGceCaracteristicasTable extends Migration
{
    public function up(): void
    {
        Schema::create('gce_caracteristicas', function (Blueprint $table) {
            $table->increments('gce_id');
            $table->string('gce_nombre_equipo');
            $table->string('gce_board');
            $table->string('gce_case');
            $table->string('gce_procesador');
            $table->string('gce_grafica');
            $table->unsignedInteger('gce_ram');
            $table->string('gce_disco_duro');
            $table->string('gce_teclado');
            $table->string('gce_mouse');
            $table->unsignedDouble('gce_pantalla');
            $table->boolean('gce_estado');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gce_caracteristicas');
    }
}
