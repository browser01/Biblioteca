<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('docfiscal');
            $table->string('email')->unique();
            $table->string('direccion1');
            $table->string('direccion2');
            $table->string('telefono');
            $table->string('celular');
            $table->string('foto');
            $table->string('descuento');
            $table->string('limite');
            $table->string('id_precio');
            $table->string('situacion');
            $table->boolean('residente');
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
        Schema::dropIfExists('clientes');
    }
}
