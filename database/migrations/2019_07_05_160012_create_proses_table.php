<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses', function (Blueprint $table) {
            $table->bigIncrements('id_proses');
            $table->string('nrp');
            $table->unsignedBigInteger('id_surat')->nullable();
            $table->date('estimasi')->nullable();
            $table->enum('status', array('Proses','Batal','Selesai'))->default('Proses');
            $table->string('jenis_surat')->nullable();
            $table->timestamps();
        });
        Schema::table('proses', function($table){
            $table->foreign('id_surat')
                ->references('id_surat')->on('surats')
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
        Schema::dropIfExists('proses');
    }
}
