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
        Schema::create('animals', function (Blueprint $table) {
            $table->id('IdAnimal');
            $table->integer('IdRecinto');
            $table->integer('IdEspecie');
            $table->integer('IdCuidador');
            $table->string('Nombre');
            $table->integer('Edad');
            $table->string('NombreCientifico');
            $table->string('Sexo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
