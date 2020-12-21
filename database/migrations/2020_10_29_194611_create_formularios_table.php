<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nombre2')->nullable();
            $table->string('apellido');
            $table->string('apellido2')->nullable();
            $table->string('genero');
            $table->string('fechan');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('postal');
            $table->string('telefono');
            $table->string('email');
            $table->string('estatus');
            $table->string('ssn');
            $table->string('estadocivil');

            $table->string('nombrecy')->nullable();
            $table->string('nombrecy2')->nullable();
            $table->string('apellidocy')->nullable();
            $table->string('apellidocy2')->nullable();
            $table->string('generocy')->nullable();
            $table->string('fechancy')->nullable();
            $table->string('estatuscy')->nullable();
            $table->string('ssncy')->nullable();

            $table->string('ingreso');
            $table->string('banco');
            $table->string('ruta');
            $table->string('cuenta');

            $table->string('dependientes');

            $table->integer('visto');
            $table->integer('perfil');

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
        Schema::dropIfExists('formularios');
    }
}
