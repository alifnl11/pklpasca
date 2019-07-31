<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proses;

class selesaiController extends Controller
{
    public function status() {
        $status = Proses::paginate(5);
        return view('adminloket',['status' => $status]);
    }
    
    public function changeStatus($id_proses, $status)
    {
    $coba = Proses::findOrFail($id_proses);
    $coba->status = 'Telah Diambil';
    $coba->save();
    return redirect()->route('coba');
    }
}
