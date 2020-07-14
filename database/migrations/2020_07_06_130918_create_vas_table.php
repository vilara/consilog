<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('generico')->nullable();
            $table->integer('fabricante_id')->nullable();
            $table->string('modelo')->nullable();
            $table->string('tipo')->nullable();
            $table->boolean('disponibilidade')->nullable();
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
        Schema::dropIfExists('vas');
    }
}
