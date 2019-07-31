<?php

namespace App\Http\Controllers;
use App\Proses;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class penolakanController extends Controller
{
    public function status() {
        $status = Proses::paginate(5);
        return view('adminTTDpimpinan',['status' => $status]);
    }
    
    public function changeStatus($id_proses, $status)
    {
    $coba = Proses::findOrFail($id_proses);
    $coba->status = 'Surat Ditolak';
    $coba->save();
    $email= $coba->email;
    $email_body= 'surat annda DITOLAK';

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
        return redirect()->route('ttd')->with('sukses','Gagal mengirim Email');
        }
        return redirect()->route('ttd')->with('sukses','Data berhasil di update');
    }
}
