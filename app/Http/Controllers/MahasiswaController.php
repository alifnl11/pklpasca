<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{

    //index (menampilkan semua data)
    public function index() {
        $index = Mahasiswa::all();
        return response()->json($index);
    }
    //create
    public function create(Request $request){
        $request->validate([
            'nrp' => 'required',
            'nama' => 'required',
            'mayor' => 'required',
            'prodi' => 'required' 
        ]);

        $mahasiswa = Mahasiswa::create($request->all());

        return response()->json([
            'Pesan' => 'Data Berhasil Masuk',
            'mahasiswa' => Mahasiswa::find($mahasiswa)
        ]);
    }

    //show with id
    public function show($mahasiswa)
    {
        return Mahasiswa::find($mahasiswa);
    }

    //update 
    public function update(Request $request,$mahasiswa)
    {
        $nrp = $request->nrp;
        $nama = $request->nama;
        $mayor = $request->mayor;
        $prodi = $request->prodi;

        $new = Mahasiswa::find($mahasiswa);
        $new->nrp = $nrp;
        $new->nama = $nama;
        $new->mayor = $mayor;
        $new->prodi = $prodi;
        $new->save();

        return response()->json([
            'Pesan' => 'Sukses! Data ter Update',
            'mahasiswa' => Mahasiswa::find($mahasiswa)
        ]);
    }
    //delete with id
    public function delete($mahasiswa)
    {
        Mahasiswa::find($mahasiswa)->delete();

        return response()->json([
            'Pesan' => 'Sukses! Data Telah di Hapus'
        ]);
    }
}
