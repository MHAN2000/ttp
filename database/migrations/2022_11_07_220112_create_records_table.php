<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre_realiza');
            $table->string('curp');
            $table->string('nombre');
            $table->string('paterno')->default('000');
            $table->string('materno');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
            $table->string('estatus')->default('Pendiente');
            $table->string('turno')->default('000');
            $table->foreignId('id_nivel')->references('id')->on('levels');
            $table->foreignId('id_municipio')->references('id')->on('municipios');
            $table->foreignId('id_asunto')->references('id')->on('subjects');
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
        Schema::dropIfExists('records');
    }
}
