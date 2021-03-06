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
            $table->date('estimasi')->nullable(true);
            $table->enum('status', array('Pending','Diterima','Ditolak','Sudah Di tanda tangani','Bisa Diambil','Telah Diambil','Surat Ditolak'))->default('Pending');
            $table->string('jenis_surat')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('desc_diterima')->nullable(true);
            $table->string('desc_ttd')->nullable(true);
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
