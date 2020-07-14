<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('nome');
            $table->string('descricao');
            $table->string('tipo');
            $table->string('modelo');
            $table->string('nee_nsm');
            $table->string('calibre');
            $table->timestamps();
        });
        
        	Schema::create('municaos_oms', function (Blueprint $table) {
        		$table->increments('id');
        		$table->unsignedInteger('om_id');
        		
        		$table->foreign('om_id')->references('id')->on('oms') ->onDelete('cascade');
        		
        		$table->unsignedInteger('municao_id');
        		
        		$table->foreign('municao_id')->references('id')->on('municaos') ->onDelete('cascade');
        		
        		$table->string('qtde');
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
        Schema::dropIfExists('municaos');
    }
}
