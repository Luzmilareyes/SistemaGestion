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
        Schema::create('propietarioestablecimientos', function (Blueprint $table) {
            $table->bigIncrements('id_propietario');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('clave');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propietarioestablecimientos');
    }
};
