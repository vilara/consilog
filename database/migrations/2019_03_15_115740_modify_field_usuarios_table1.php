<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyFieldUsuariosTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
        	$table->renameColumn('nomeCompleto', 'name');
        	$table->string('password')->after('email');
        	$table->timestamp('email_verified_at')->nullable()->after('email');
        	$table->boolean('ativo')->nullable($value = true)->after('email');
        	$table->rememberToken()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
    }
}
