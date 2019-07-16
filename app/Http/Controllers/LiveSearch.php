<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('arsips')
         ->Where('id_loket', 'like', '%'.$query.'%')
         ->orwhere('jenis_surat', 'like', '%'.$query.'%')
         ->orWhere('surat_pelayanan_sps', 'like', '%'.$query.'%')
         ->orWhere('surat_pelayanan_lainnya', 'like', '%'.$query.'%')
         ->orWhere('rincian_jenis_surat', 'like', '%'.$query.'%')
         ->orWhere('tujuan_surat_keluar', 'like', '%'.$query.'%')
         ->orWhere('tujuan_surat', 'like', '%'.$query.'%')
         ->orWhere('nrp', 'like', '%'.$query.'%')
         ->orWhere('rincian_tujuan_surat', 'like', '%'.$query.'%')
         ->orWhere('kode_surat', 'like', '%'.$query.'%')
         ->orWhere('tujuan_surat_keluar_lainnya', 'like', '%'.$query.'%')
         ->orWhere('pengirim_Surat_Keluar', 'like', '%'.$query.'%')
         ->orWhere('keterangan_pengirim_surat_keluar', 'like', '%'.$query.'%')
         ->orWhere('Country', 'like', '%'.$query.'%')
         ->orderBy('id_loket', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('arsips')
         ->orderBy('id_loket', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id_loket.'</td>
         <td>'.$row->jenis_surat.'</td>
         <td>'.$row->surat_pelayanan_sps.'</td>
         <td>'.$row->surat_pelayanan_lainnya.'</td>
         <td>'.$row->rincian_jenis_surat.'</td>
         <td>'.$row->tujuan_surat_keluar.'</td>
         <td>'.$row->tujuan_surat.'</td>
         <td>'.$row->nrp.'</td>
         <td>'.$row->rincian_tujuan_surat.'</td>
         <td>'.$row->kode_surat.'</td>
         <td>'.$row->tujuan_surat_keluar_lainnya.'</td>
         <td>'.$row->pengirim_Surat_Keluar.'</td>
         <td>'.$row->keterangan_pengirim_surat_keluar.'</td>
         <td>'.$row->nomor_surat.'</td>
         <td>'.$row->file.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}