<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arsip;
use DB;

class listArsipController extends Controller
{
    public function list() {
        $list = Arsip::paginate(5);
        return view('listArsip',['list' => $list]);
    }//

    public function search(Request $request) {
        $search = $request->get('search');
        $list = DB::table('arsips') 
            ->Where('id_loket', 'like', '%'.$search.'%')
            ->orwhere('jenis_surat', 'like', '%'.$search.'%')
            ->orWhere('surat_pelayanan_sps', 'like', '%'.$search.'%')
            ->orWhere('surat_pelayanan_lainnya', 'like', '%'.$search.'%')
            ->orWhere('rincian_jenis_surat', 'like', '%'.$search.'%')
            ->orWhere('tujuan_surat_keluar', 'like', '%'.$search.'%')
            ->orWhere('tujuan_surat', 'like', '%'.$search.'%')
            ->orWhere('nrp', 'like', '%'.$search.'%')
            ->orWhere('rincian_tujuan_surat', 'like', '%'.$search.'%')
            ->orWhere('kode_surat', 'like', '%'.$search.'%')
            ->orWhere('tujuan_surat_keluar_lainnya', 'like', '%'.$search.'%')
            ->orWhere('pengirim_Surat_Keluar', 'like', '%'.$search.'%')
            ->orWhere('keterangan_pengirim_surat_keluar', 'like', '%'.$search.'%')
            ->orWhere('file', 'like', '%'.$search.'%')
            ->orderBy('id_loket', 'desc')
            ->paginate(5);
        return view('listArsip', ['list' => $list]);
    }

}
