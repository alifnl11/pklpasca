<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class AdminPermohonanSurat extends Controller
{
    public function index() {
        $index = Surat::paginate(3);
        return view('adminPermohonanSurat',['index' => $index]);
    }
}
