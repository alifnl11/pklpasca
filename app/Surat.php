<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'nrp',
        'estimasi',
        'status',
        'jenis_surat'
    ];
    public $timestamps = false;

}
