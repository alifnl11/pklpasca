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
            $table->unsignedBigInteger('id_proses')->nullable();
            $table->string('jenis_admin');
            $table->string('status_admin');
            $table->string('name');
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('admins', function($table){
            $table->foreign('id_proses')
                ->references('id_proses')->on('proses')
                ->onDelete('cascade');
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
