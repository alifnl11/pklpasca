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
            $table->string('id_loket')->nullable();
            $table->bigIncrements('id');
            $table->string('jenis_surat');
            $table->string('surat_pelayanan_sps')->nullable();
            $table->string('surat_pelayanan_lainnya')->nullable();
            $table->string('rincian_jenis_surat')->nullable();
            $table->string('tujuan_surat_keluar')->nullable();
            $table->string('tujuan_surat')->nullable();
            $table->string('nrp')->nullable();
            $table->string('rincian_tujuan_surat')->nullable();
            $table->string('kode_surat')->nullable();
            $table->string('tujuan_surat_keluar_lainnya')->nullable();
            $table->string('pengirim_Surat_Keluar')->nullable();
            $table->string('keterangan_pengirim_surat_keluar')->nullable();
            $table->binary('file')->nullable();
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
