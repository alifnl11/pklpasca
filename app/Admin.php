<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'username', 
        'nama',                       
        'password',        
        'remember_token'
    ];
    public $timestamps = false;
}   

