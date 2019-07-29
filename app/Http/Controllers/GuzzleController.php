<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;
use App\Surat;
use App\Proses;
use App\Mahasiswa;
use Illuminate\Support\Facades\DB;
use App\Admin;

class GuzzleController extends Controller
{
    public function getDataSurat(){
        for($i=1; $i<=67; $i++){
            $client = new CLient();
            $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/pengajuan/'.$i.'');
            $response = $request->getBody()->getContents();   
        
            $data = json_decode($response, true);

            $surat = new Surat();
            $surat->id_surat = $data['id_pengajuan'];
            $surat->jenis_surat = $data['nama_surat'];
            $surat->waktu = $data['waktu'];
            $surat->save();
        }
        return "Data Berhasil Masuk";
    }

    public function getDataMahasiswa(){
        $client = new CLient();
        $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/mahasiswa');
        $response = $request->getBody()->getContents();   
        
        $data = json_decode($response, true);

        foreach($data as $row){
            $mahasiswa = new Mahasiswa();
            $mahasiswa->nrp = $row["nrp"];
            $mahasiswa->nama = $row["nama"];
            $mahasiswa->mayor = $row["mayor"];
            $mahasiswa->prodi = $row["prodi"];
            $mahasiswa->save();    
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
            $admin->id_admin    = $row["id"];
            $admin->nama        = $row["nama"];
            $admin->jenis_admin = $row["mayor"];
            $admin->prodi       = $row["prodi"];
            $admin->save();    
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
            $cek = $proses->id_proses;
            $hasilcek = DB::table('proses')
                        ->where('id_proses','=', $cek)
                        ->count(); 
            if($hasilcek>0)
            echo "<script>alert('ID Proses Sudah Digunakan');history.go(-1) </script>";
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
            $terms = $proses->id_surat;
            $nama_surat = Surat::where('id_surat', $terms)->value('jenis_surat');
            $proses->jenis_surat = $nama_surat;
            $proses->email = null;
            $proses->save();
            };
        };
        return "Data Berhasil Masuk";
    }
}

