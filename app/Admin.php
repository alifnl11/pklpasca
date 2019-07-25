<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'username',
        'id_proses',      
        'jenis_admin',      
        'status_admin',     
        'name',             
        'email',           
        'password',        
        'remember_token',  
    ];

    public function proses1(){
        return $this->hasMany(Proses::class,'id_proses','id_proses');
    }
}

