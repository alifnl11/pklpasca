<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proses;

class ResiController extends Controller
{
  public function index(Request $request)
  {
    //ini untuk cari
    if($request->has('cari')){
      $data_surat = \App\Proses::where('id_proses','RLIKE','[[:<:]]'.$request->cari.'[[:>:]]')->get();
    }else{
    $data_surat = \App\Proses::all();
    }

    //ini untuk view
    // sewaktu membuat model data, harus pangil namespace(App)
    // danjuga nama classnya (surat) -- seharusnya dikasih nama surat
    //data surat juga harus masuk ke view supaya keliatan
    return view('resi.index',['data_surat'=>$data_surat]) ;            //ini list all semua data surat



  }
}
