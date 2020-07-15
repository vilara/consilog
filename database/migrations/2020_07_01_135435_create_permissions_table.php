<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	
    	Schema::create('permissions', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('name',50);
    		$table->string('label', 200);
    		$table->timestamps();
    	});
    		
    		Schema::create('permission_perfil', function (Blueprint $table) {
    			$table->increments('id');
    			$table->unsignedInteger('permission_id');
    			$table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
    			$table->unsignedInteger('perfil_id');
    			$table->foreign('perfil_id')->references('id')->on('perfils')->onDelete('cascade');
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
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_perfil');
    }
}
