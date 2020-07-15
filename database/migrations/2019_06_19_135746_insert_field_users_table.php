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
        Schema::table('secoes', function (Blueprint $table) {
        	$table->string('abrevSecao') // Nome da coluna
        	->nullable()
        	->after('nomeSecao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('secoes', function (Blueprint $table) {
            //
        });
    }
}
