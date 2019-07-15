<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    protected $fillable = [
        'id_proses',
        'nrp',
        'id_surat',
        'estimasi',
        'status',
        'jenis_surat'
    ];

    public function surat(){
        return $this->hasOne(Surat::class,'id_surat');
    }
}

