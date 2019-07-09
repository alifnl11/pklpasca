<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'id_proses',
        'jenis_admin',
        'status_admin'
    ];
    public $timestamps = false;

    public function proses1(){
        return $this->hasMany(Proses::class,'id_proses','id_proses');
    }
}

