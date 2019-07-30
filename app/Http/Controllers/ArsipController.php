<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arsip;
use DB;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
        'jenis_surat'                      => 'required',
        
        
       ]); //
       $arsip = new Arsip([
        'id_loket'                         => $request->get('id_loket'),
        'jenis_surat'                      => $request->get('jenis_surat'),
        'surat_pelayanan_sps'              => $request->get('surat_pelayanan_sps'),
        'surat_pelayanan_lainnya'          => $request->get('surat_pelayanan_lainnya'),
        'rincian_jenis_surat'              => $request->get('rincian_jenis_surat'),
        'tujuan_surat_keluar'              => $request->get('tujuan_surat_keluar'),
        'tujuan_surat'                     => $request->get('tujuan_surat'),
        'nrp'                              => $request->get('nrp'),
        'rincian_tujuan_surat'             => $request->get('rincian_tujuan_surat'),
        'kode_surat'                       => $request->get('kode_surat'),
        'tujuan_surat_keluar_lainnya'      => $request->get('tujuan_surat_keluar_lainnya'),
        'pengirim_Surat_Keluar'            => $request->get('pengirim_Surat_Keluar'),
        'keterangan_pengirim_surat_keluar' => $request->get('keterangan_pengirim_surat_keluar'), 
        'file'                             => $request->get('file')
       ]);
       $arsip-> save();
       return redirect()->route('arsip')->with('success','Arsip berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arsip = \App\Arsip::find($id);
        return view('edit',['arsip' => $arsip]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $arsip = \App\Arsip::find($id);
        $arsip->update($request->all());
        return redirect()->route('list')->withSuccess('Data berhasil diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
