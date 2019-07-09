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
            $table->bigIncrements('id_admin');
            $table->unsignedBigInteger('id_proses');
            $table->string('jenis_admin');
            $table->string('status_admin');
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
