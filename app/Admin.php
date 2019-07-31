<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'username', 
        'jenis_admin',
        'status_admin',
        'nama',
        'email',                       
        'password',        
        'remember_token'
    ];
    public $timestamps = false;
}   

