<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('puesto');
            $table->text('descripcion');
            $table->integer('salario_minimo');
            $table->integer('salario_maximo');
            $table->string('ubicacion');
            $table->string('correo_contacto');
            $table->integer('empresa_id')->unsigned();
            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleos');
    }
}
