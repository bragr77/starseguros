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
            $table->string('generocy')->nullable();
            $table->string('fechancy')->nullable();
            $table->string('estatuscy')->nullable();
            $table->string('ssncy')->nullable();

            $table->string('ingreso');
            $table->string('banco');
            $table->string('ruta');
            $table->string('cuenta');

            $table->string('nombred1')->nullable();
            $table->string('generod1')->nullable();
            $table->string('fechand1')->nullable();
            $table->string('relaciond1')->nullable();
            $table->string('estatusd1')->nullable();
            $table->string('ssnd1')->nullable();

            $table->string('nombred2')->nullable();
            $table->string('generod2')->nullable();
            $table->string('fechand2')->nullable();
            $table->string('relaciond2')->nullable();
            $table->string('estatusd2')->nullable();
            $table->string('ssnd2')->nullable();

            $table->string('nombred3')->nullable();
            $table->string('generod3')->nullable();
            $table->string('fechand3')->nullable();
            $table->string('relaciond3')->nullable();
            $table->string('estatusd3')->nullable();
            $table->string('ssnd3')->nullable();

            $table->string('nombred4')->nullable();
            $table->string('generod4')->nullable();
            $table->string('fechand4')->nullable();
            $table->string('relaciond4')->nullable();
            $table->string('estatusd4')->nullable();
            $table->string('ssnd4')->nullable();

            $table->string('nombred5')->nullable();
            $table->string('generod5')->nullable();
            $table->string('fechand5')->nullable();
            $table->string('relaciond5')->nullable();
            $table->string('estatusd5')->nullable();
            $table->string('ssnd5')->nullable();

            $table->string('nombred6')->nullable();
            $table->string('generod6')->nullable();
            $table->string('fechand6')->nullable();
            $table->string('relaciond6')->nullable();
            $table->string('estatusd6')->nullable();
            $table->string('ssnd6')->nullable();

            $table->string('nombred7')->nullable();
            $table->string('generod7')->nullable();
            $table->string('fechand7')->nullable();
            $table->string('relaciond7')->nullable();
            $table->string('estatusd7')->nullable();
            $table->string('ssnd7')->nullable();

            $table->integer('visto');

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
