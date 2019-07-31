<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->bigIncrements('id_prosess');
            $table->string('nrpp');
            $table->unsignedBigInteger('id_suratt')->nullable();
            $table->string('jenis_suratt')->nullable();
            $table->date('estimasii')->nullable();
            $table->string('alamat_email');
            $table->enum('statuss', array('Pending','Diterima','Ditolak','Sudah Di tanda tangani','Bisa Diambil'))->default('Pending');
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
        Schema::dropIfExists('tracks');
    }
}
