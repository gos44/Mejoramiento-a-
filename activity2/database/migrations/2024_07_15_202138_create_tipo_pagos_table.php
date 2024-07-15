<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoPagosTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_pagos', function (Blueprint $table) {
            $table->id(); 
            $table->string('concepto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_pagos');
    }
}
