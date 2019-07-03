<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
   protected $fillable = ['jenis_surat', 'surat_pelayanan_sps', 'surat_pelayanan_lainnya', 'rincian_jenis_surat', 'id_loket', 'tujuan_surat_keluar', 'tujuan_surat', 'nrp', 'rincian_tujuan_surat', 'kode_surat', 'tujuan_surat_keluar_lainnya', 'pengirim_Surat_Keluar', 'keterangan_pengirim_surat_keluar', 'file']; //
}
