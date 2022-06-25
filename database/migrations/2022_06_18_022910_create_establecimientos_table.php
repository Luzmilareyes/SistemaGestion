<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->bigIncrements('id_establecimiento');
            $table->string('nombre');
            $table->string('calificacion');
            $table->string('direccion');
            $table->string('descripcion');
           
            $table->foreignId("id_serviciosx")->constrained("servicios")->references('id_servicio');
            $table->foreignId("id_propietarios")->constrained("propietarioestablecimientos")->references('id_propietario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
};
