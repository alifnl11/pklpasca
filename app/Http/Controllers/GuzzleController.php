<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;
use App\Surat;
use App\Proses;
use Carbon\Carbon;

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
            $surat->nama_surat = $row["nama_surat"];
            $surat->waktu = $row["waktu"];
            $surat->syarat = $row["syarat"];
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
            if(is_int($rows["id_proses"]))
            $proses->id_proses = $rows["id_proses"];
            else 
            $proses->id_proses = null;
            $proses->nrp = $rows["nrp"];
            $proses->id_surat = $rows["id_pengajuan"];
            $proses->estimasi = null;
            $proses->jenis_surat = null;
            
            $terms = $proses->id_surat;
            $nama_surat = Surat::where('id_surat', $terms)->select(array('nama_surat','waktu'))->get();
            
            foreach($nama_surat as $row){
                $hasil = $proses;
                $hasil->jenis_surat = $row["nama_surat"];
                $today = $rows["tanggal_pengajuan"];
                $daystosum = $row["waktu"];
                $estimasi = date('d-m-Y', strtotime($today.' + '.$daystosum.' days'));
                $hasil->estimasi = $estimasi;
                $hasil->save();    
            }    
            $proses->save();    
        } 
        return "Data Berhasil Masuk";
    }
}
