<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'jenis_surat',
        'waktu'
    ];
    
    public $timestamps = false;

    public function proses(){
        return $this->belongsTo(Proses::class,'id_surat');
    }
}
