<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'id_admin',
        'jenis_admin',
        'status_admin'
    ];
}

