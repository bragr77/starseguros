<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependientes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('formulario_id')->unsigned();

            $table->string('nombre')->nullable();
            $table->string('nombre2')->nullable();
            $table->string('apellido')->nullable();
            $table->string('apellido2')->nullable();
            $table->string('genero')->nullable();
            $table->string('fechan')->nullable();
            $table->string('relacion')->nullable();
            $table->string('estatus')->nullable();
            $table->string('ssn')->nullable();
            $table->timestamps();

            $table->foreign('formulario_id')->references('id')->on('formularios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependientes');
    }
}
