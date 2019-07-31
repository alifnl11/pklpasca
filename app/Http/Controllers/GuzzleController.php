<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;
use App\Surat;
use App\Proses;
use App\Mahasiswa;
use App\Admin;


class GuzzleController extends Controller
{
    public function getDataSurat(){
        for($i=1; $i<=67; $i++){
            $client = new CLient();
            $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/pengajuan/'.$i);
            $response = $request->getBody()->getContents();   
        
            $data = json_decode($response, true);

            $surat = new Surat();
            $surat->id_surat = $data['id_pengajuan'];
            $cek = Surat::where('id_surat',$surat->id_surat )->count();
            if($cek>0)
            echo "<script>alert('Id Surat Sudah Terupdate');</script>";
            else{
            $surat->jenis_surat = $data['nama_surat'];
            $surat->waktu = $data['waktu'];
            $surat->save();
            }
        }
        return "Data Berhasil Masuk";
    }

    public function getDataMahasiswa(){
        ini_set('max_execution_time', 0);
        for($i=1; $i<=12435; $i++){
            $client = new CLient();
            $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/emailmahasiswa/'.$i,['stream' => true]);
            $response = $request->getBody()->getContents();   
            
            $data = json_decode($response, true);

            $mahasiswa = new Mahasiswa();
            $mahasiswa->id = $data["id"];
            $mahasiswa->nrp = $data["nrp"];
            $cek = Mahasiswa::where('nrp',$mahasiswa->nrp )->count();
            if($cek>0)
            echo "<script>alert('NRP Sudah Terupdate');</script>";
            else{
            if($data["email"] == ' ')
            $mahasiswa->email = null;
            else 
            $mahasiswa->email = $data["email"];
            $mahasiswa->save();    
            }
        }
        return "Data Berhasil Masuk";
    }

    public function getDataAdmin(){
        $client = new CLient();
        $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/admin');
        $response = $request->getBody()->getContents();   
        
        $data = json_decode($response, true);

        foreach($data as $row){
            $admin = new Admin();
            $admin->username = $row["id"];
            $cek = Admin::where('username',$admin->username )->count(); 
            if($cek>0)
            echo "<script>alert('Username Sudah Terupdate');</script>";
            else{
            $admin->nama = $row["nama"];
            $admin->password = str_random(8);
            $admin->remember_token = str_random(10);
            $admin->save();    
            }
        }
        return "Data Berhasil Masuk";
    }

    public function getDataProses(){
        $client = new CLient();
        $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/proses');
        $response = $request->getBody()->getContents();   
        
        $data = json_decode($response, true);
    
        foreach($data as $row){
            $proses = new Proses();
            if($row["id_proses"] == '')
            $proses->id_proses = null;
            else 
            $proses->id_proses = $row["id_proses"];
            $cek = Proses::where('id_proses',$proses->id_proses )->count();
            if($cek>0)
            echo "<script>alert('Id Proses Sudah Terupdate');</script>";
            else{
            $proses->nrp = $row["nrp"];
            if($row["id_pengajuan"] != 0)
            $proses->id_surat = $row["id_pengajuan"];
            else 
            $proses->id_surat = null;
            if($row["estimasi"] == 0)
            $proses->estimasi = null;
            else
            $proses->estimasi = $row["estimasi"]; 
            $nama_surat = Surat::where('id_surat', $proses->id_surat)->value('jenis_surat');
            $proses->jenis_surat = $nama_surat;
            $nama_email = Mahasiswa::where('nrp', $proses->nrp)->value('email');
            $proses->email = $nama_email;
            $proses->save();
            }
        }
        return "Data Berhasil Masuk";
    }
}

