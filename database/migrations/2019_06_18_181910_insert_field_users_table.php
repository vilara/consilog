<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertFieldUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcoes', function (Blueprint $table) {
        	$table->string('abrevFuncao') // Nome da coluna
        	->nullable()
        	->after('nomeFuncao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcoes', function (Blueprint $table) {
            //
        });
    }
}
