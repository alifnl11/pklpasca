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
            $table->unsignedBigInteger('id_surat')->nullable();
            $table->foreign('id_surat')->references('id_surat')->on('surats')->onDelete('cascade');
            $table->string('nrp')->nullable();
            $table->foreign('nrp')->references('nrp')->on('mahasiswas')->onDelete('cascade');
            $table->date('estimasi')->nullable();
            $table->enum('status', array('Proses','Batal','Selesai'))->default('Proses');
            $table->string('jenis_surat')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('proses');
    }
}
