<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;
use App\Surat;
use App\Proses;

class GuzzleController extends Controller
{
    public function getDataSurat(){
        $client = new CLient();
        $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/pengajuan');
        $response = $request->getBody()->getContents();   
        
        $data = json_decode($response, true);

        foreach($data as $row){
            $surat = new Surat();
            $surat->id_surat = $row["id_pengajuan"];
            $surat->jenis_surat = $row["nama_surat"];
            $surat->waktu = $row["waktu"];
            $surat->save();    
        }
        return "Data Berhasil Masuk";
    }

    public function getDataProses(){
        $client = new CLient();
        $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/proses');
        $response = $request->getBody()->getContents();   
        
        $data = json_decode($response, true);
        
        foreach($data as $rows){
            $proses = new Proses();
            if($rows["id_proses"] == '')
            $proses->id_proses = null;
            else 
            $proses->id_proses = $rows["id_proses"];
            if(Proses::where('id_proses', $proses->id_proses))
            break;
            else{
            $proses->nrp = $rows["nrp"];
            if($rows["id_pengajuan"] == '0'|| $rows["id_pengajuan"] > 20)
            $proses->id_surat = null;
            else
            $proses->id_surat = $rows["id_pengajuan"];
            if($rows["estimasi"] == 0)
            $proses->estimasi = null;
            else
            $proses->estimasi = $rows["estimasi"]; 
            $terms = $proses->id_surat;
            $nama_surat = Surat::where('id_surat', $terms)->value('jenis_surat');
            $proses->jenis_surat = $nama_surat;
            $proses->save();
            }
        };
        return "Data Berhasil Masuk";
    }
}

