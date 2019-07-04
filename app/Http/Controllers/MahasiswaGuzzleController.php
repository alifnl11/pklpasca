<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;

class MahasiswaGuzzleController extends Controller
{
    public function getRemoteData(){
        $client = new CLient();
        $request = $client->get('http://pelayananpasca.ipb.ac.id/antrian/api/web/v1/mahasiswa');
        $response = $request->getBody()->getContents();
        
        $mahasiswa = json_decode($response, true);

        return $mahasiswa;
    }
}
