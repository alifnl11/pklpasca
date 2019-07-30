<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use Illuminate\Support\Facades\Mail;
class cobaController extends Controller
{
    public function status() {
        $status = Track::all();
        return view('adminloket',['status' => $status]);
    }
    
    public function changeStatus($id_prosess, $statuss)
    {
    $coba = Track::findOrFail($id_prosess);
    $coba->statuss = 'Diterima';
    $coba->save();

    $alamat_email= $coba->alamat_email;
    $email_body= 'status surat DITERIMA';

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
        return redirect()->route('coba')->with('sukses','Gagal mengirim Email');
      }
      return redirect()->route('coba')->with('sukses','Data berhasil di update');
    }

    public function search(Request $request) {
        $search = $request->get('search');
        $list = DB::table('cobas') 
            ->Where('id_prosess', 'like', '%'.$search.'%')
            ->orwhere('nrpp', 'like', '%'.$search.'%')
            ->orWhere('estimasii', 'like', '%'.$search.'%')
            ->orWhere('jenis_suratt', 'like', '%'.$search.'%')
            ->orderBy('id_prosess', 'desc')
            ->paginate(5)->onEachSide(2);
        return view('admin', ['list' => $list]);
    }
}
