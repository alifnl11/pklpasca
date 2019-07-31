<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('admins', function (Blueprint $table) {
            $table->string('username')->unique();  
            $table->string('jenis_admin')->nullable();
            $table->string('status_admin')->nullable();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
