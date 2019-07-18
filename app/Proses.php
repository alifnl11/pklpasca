<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    protected $fillable = [
        'nrp',
        'id_surat',
        'nama_surat',
        'estimasi',
        'status',
        'jenis_surat'
    ];

    public function admin(){
        return $this->belongsTo(Proses::class);
    }

    public function surat(){
        return $this->hasMany(Surat::class,'id_surat','id_surat');
    }
}

