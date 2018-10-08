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
        Schema::create('usuarios', function (Blueprint $table) { 
            $table->string('nombre');
            //Aqui se debe agregar el campo con el que validaremos el USUARIO 
            $table->string('apellido');
            $table->string('alias')->unique();
            $table->string('email')->unique();
            $table->string('password');
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
