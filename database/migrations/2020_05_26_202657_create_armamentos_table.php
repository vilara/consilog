<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armamentos', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('codigo');
        	$table->string('nome');
        	$table->string('descricao');
        	$table->string('fabricante');
        	$table->string('modelo');
        	$table->string('nee_nsm');
        	$table->string('tipo');
        	$table->timestamps();
        });
        
        	Schema::create('armamentos_oms', function (Blueprint $table) {
        		$table->increments('id');
        		$table->unsignedInteger('om_id');
        		
        		$table->foreign('om_id')->references('id')->on('oms') ->onDelete('cascade');
        		
        		$table->unsignedInteger('armamento_id');
        		
        		$table->foreign('armamento_id')->references('id')->on('armamentos') ->onDelete('cascade');
        		
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
        Schema::dropIfExists('armamentos');
    }
}
