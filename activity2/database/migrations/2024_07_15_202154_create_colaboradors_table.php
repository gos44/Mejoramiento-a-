<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradoresTable extends Migration
{
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre');
            $table->integer('nif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('colaboradores');
    }
}

