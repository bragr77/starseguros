<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('formulario_id')->unsigned();

            $table->string('tiposeguro')->nullable();
            $table->string('comision')->nullable();
            $table->string('fecharegistro')->nullable();
            $table->string('observaciones', 200)->nullable();

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
        Schema::dropIfExists('profiles');
    }
}
