<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'id',
        'nrp',
        'email'
    ];

    public $timestamps = false;

    public function proses(){
        return $this->hasMany(Proses::class,'nrp');
    }
}
