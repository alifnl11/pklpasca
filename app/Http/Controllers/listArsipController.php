<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arsip;

class listArsipController extends Controller
{
    public function list() {
        $list = Arsip::paginate(5);
        return view('listArsip',['list' => $list]);
    }//
}
