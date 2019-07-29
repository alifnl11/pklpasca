<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class AdminTTDPimpinan extends Controller
{
    public function index() {
        $index = Surat::paginate(3);
        return view('adminTTDpimpinan',['index' => $index]);
    }
}
