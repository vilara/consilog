<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyFieldLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logins', function (Blueprint $table) {
            $table->integer('usuario_id')->unique()->change();
            $table->string('password')->after('email');
            $table->timestamp('email_verified_at')->nullable()>after('email');
            $table->boolean('ativo')->nullable($value = true);
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
        Schema::table('logins', function (Blueprint $table) {
            //
        });
    }
}
