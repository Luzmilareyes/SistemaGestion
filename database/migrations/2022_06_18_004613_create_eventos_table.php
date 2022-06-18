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
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id_evento');
            $table->string('lugar');
            $table->date('fecha');
            $table->string('modalidad');
            $table->string('motivo');
            $table->datetime('hora_inicio');
            $table->datetime('hora_fin');
            $table->integer('id_gestor');
            $table->foreignId('id_gestores')->constrained('gestors')->references('id_gestor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
