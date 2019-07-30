<?php

namespace App\Http\Controllers;
use App\Track;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class adminttdController extends Controller
{
    public function status() {
        $status = Track::paginate(5);
        return view('adminTTDpimpinan',['status' => $status]);
    }
    
    public function changeStatus($id_prosess, $statuss)
    {
    $coba = Track::findOrFail($id_prosess);
    $coba->statuss = 'Sudah Di tanda tangani';
    $coba->save();
    $alamat_email= $coba->alamat_email;
    $email_body= 'status surat Di tanda tangani';

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
        return redirect()->route('ttd')->with('sukses','Gagal mengirim Email');
        }
        return redirect()->route('ttd')->with('sukses','Data berhasil di update');
    }
}
