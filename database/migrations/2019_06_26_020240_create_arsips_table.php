<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArsipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_surat');
            $table->string('surat_pelayanan_sps');
            $table->string('surat_pelayanan_lainnya');
            $table->string('rincian_jenis_surat');
            $table->string('id_loket');
            $table->string('tujuan_surat_keluar');
            $table->string('tujuan_surat');
            $table->string('nrp');
            $table->string('rincian_tujuan_surat');
            $table->string('kode_surat');
            $table->string('tujuan_surat_keluar_lainnya');
            $table->string('pengirim_Surat_Keluar');
            $table->string('keterangan_pengirim_surat_keluar');
            $table->binary('file');
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
        Schema::dropIfExists('arsips');
    }
}
