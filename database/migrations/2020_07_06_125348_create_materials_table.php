<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nee');
            $table->integer('codom_id');
            $table->integer('patrimonio');
            $table->integer('qtde')->unsigned();
            $table->date('inclusao');
            $table->string('nome');
            $table->string('descricao');
            $table->integer('materialsable_id') // Nome da coluna
            ->nullable(); // Preenchimento não obrigatório
            $table->string('materialsable_type') // Nome da coluna
            ->nullable(); // Preenchimento não obrigatório
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
        Schema::dropIfExists('materials');
    }
}
