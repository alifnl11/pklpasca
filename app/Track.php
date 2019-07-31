<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
   protected $fillable = [
    'id_prosess',
    'nrpp',
    'id_suratt',
    'jenis_suratt',
    'estimasii',
    'alamat_email',
    'statuss'
   ]; //

   protected $primaryKey = 'id_prosess';
}
