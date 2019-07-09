<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;
use App\Mahasiswa;

class MahasiswaGuzzleController extends Controller
{
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
}
