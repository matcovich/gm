<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments  ('id');
            $table->string      ('name')->nullable();

            $table->string      ('lastname')->nullable();
            $table->string      ('run')->nullable();

            $table->string      ('email')->unique()->nullable();
            $table->timestamp   ('email_verified_at')->nullable();
            $table->string      ('password')->nullable();
            $table->boolean     ('admin')->default(false);
            $table->string      ('tipo')->nullable();

            $table->string      ('direccion')->nullable();
            $table->string      ('ciudad')->nullable();
            $table->string      ('celular')->nullable();
            $table->string      ('telefono')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
