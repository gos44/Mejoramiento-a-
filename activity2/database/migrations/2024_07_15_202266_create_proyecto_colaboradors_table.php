<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoColaboradorTable extends Migration
{
    public function up()
    {
        Schema::create('proyecto_colaborador', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyecto_codigo');
            $table->unsignedBigInteger('colaborador_nif');
            $table->foreign('proyecto_codigo')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('colaborador_nif')->references('id')->on('colaboradores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyecto_colaborador');
    }
}
