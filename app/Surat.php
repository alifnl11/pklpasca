<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'id_surat',
        'nama_surat',
        'waktu',
        'syarat'
    ];
    
    public $timestamps = false;

    public function proses2(){
        return $this->belongsTo(Proses::class,'id_surat','id_surat');
    }
}
