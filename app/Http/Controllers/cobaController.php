<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proses;
use DB;
use Illuminate\Support\Facades\Mail;

class cobaController extends Controller
{
    public function status() {
        $status = Proses::all();
        return view('adminloket',['status' => $status]);
    }
    
    public function changeStatus($id_proses, $status)
    {

    $coba = Proses::findOrFail($id_proses);
    $coba->status = 'Diterima';
    $coba->save();
    
    $email= $coba->email;
    $email_body= 'status surat DITERIMA';
    $waktu=$coba->updated_at;
    $diterima= (string)$waktu.' '.$email_body;
    $coba->desc_diterima = $diterima;
    $data=array(
        'nama_pengirim'=> $coba->nama_pengirim,
        'email_body' => $email_body
      );

      Mail::send('layouts.email-template',$data,function($mail)use($email){
        $mail->to($email,'no-reply')
          ->subject("(Update) Data Surat");
        $mail->from('noreply.trackingsuratspsipb@gmail.com','Update Tracking');
 
      });
      if(Mail::failures()){
        return redirect()->route('coba')->with('sukses','Gagal mengirim Email');
      }
      return redirect()->route('coba')->with('sukses','Data berhasil di update');
    }
     
    public function search(Request $request) {
        $search = $request->get('search');
        $status = DB::table('proses') 
            ->Where('id_proses', 'like', '%'.$search.'%')
            ->orwhere('nrp', 'like', '%'.$search.'%')
            ->orWhere('estimasi', 'like', '%'.$search.'%')
            ->orWhere('jenis_surat', 'like', '%'.$search.'%')
            ->paginate(5)->onEachSide(2);
        return view('adminloket', ['status' => $status]);
    }
}
