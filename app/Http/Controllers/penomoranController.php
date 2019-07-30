<?php

namespace App\Http\Controllers;
use App\Track;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class penomoranController extends Controller
{
    public function status() {
        $status = Track::paginate(5);
        return view('adminPermohonanSurat',['status' => $status]);
    }
    
    public function changeStatus($id_prosess, $statuss)
    {
    $coba = Track::findOrFail($id_prosess);
    $coba->statuss = 'Bisa Diambil';
    $coba->save();
    $alamat_email= $coba->alamat_email;
    $email_body= 'status surat DAPAT DIAMBIL';

    $data=array(
        'nama_pengirim'=> $coba->nama_pengirim,
        'email_body' => $email_body
      );

      Mail::send('layouts.email-template',$data,function($mail)use($alamat_email){
        $mail->to($alamat_email,'no-reply')
          ->subject("(Update) Data Surat");
        $mail->from('noreply.trackingsuratspsipb@gmail.com','Update Tracking');
 
      });
      if(Mail::failures()){
        return redirect()->route('penomoran')->with('sukses','Gagal mengirim Email');
      }
      return redirect()->route('penomoran')->with('sukses','Data berhasil di update');
    }    
}
