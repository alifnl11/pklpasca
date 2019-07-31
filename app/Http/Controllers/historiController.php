<?php

namespace App\Http\Controllers;
use App\Proses;

use Illuminate\Http\Request;

class historiController extends Controller
{
    public function status() {
        $status = Proses::paginate(5);
        return view('histori',['status' => $status]);
    }
}
