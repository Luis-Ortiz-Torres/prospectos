<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prospectos', function (Blueprint $table) {
            $table->id();
            $table->string('tipoIdentificacion', 45);
            $table->bigInteger('numeroIdentificacion');
            $table->string('primerNombre', 45);
            $table->string('segundoNombre', 45);
            $table->string('primerApellido', 45);
            $table->string('segundoApellido', 45);
            $table->string('direccion', 100);
            $table->string('barrio', 45);
            $table->string('municipio', 45);
            $table->bigInteger('celular');
            $table->bigInteger('telefono');
            $table->string('correo', 45);
            $table->date('fechaIngreso');
            $table->date('fechaPrimerContacto');
            $table->string('estado', 20);
            $table->string('enteroBeneficios', 70);
            $table->string('nombreReferido', 45)->nullable();
            $table->string('apellidoReferido', 45)->nullable();
            $table->string('telefonoReferido', 20)->nullable();
            $table->unsignedBigInteger('convenio_id')->nullable();
            $table->unsignedBigInteger('origenprospecto_id');

            $table->foreign('convenio_id')
            ->references('id')
            ->on('convenios')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->foreign('origenprospecto_id')
            ->references('id')
            ->on('origenprospectos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospectos');
    }
};