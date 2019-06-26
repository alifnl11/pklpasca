<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arsip;

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
        return view('arsip.form'); //
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
        'surat_pelayanan_sps'              => 'required',
        'surat_pelayanan_lainnya'          => 'required',
        'rincian_jenis_surat'              => 'required',
        'id_loket'                         => 'required',
        'tujuan_surat_keluar'              => 'required',
        'tujuan_surat'                     => 'required',
        'nrp'                              => 'required',
        'rincian_tujuan_surat'             => 'required',
        'kode_surat'                       => 'required',
        'tujuan_surat_keluar_lainnya'      => 'required',
        'pengirim_Surat_Keluar'            => 'required',
        'keterangan_pengirim_surat_keluar' => 'required'
       ]); //
       $arsip = new Arsip([
        'jenis_surat'                      => $request->get('jenis_surat'),
        'surat_pelayanan_sps'              => $request->get('surat_pelayanan_sps'),
        'surat_pelayanan_lainnya'          => $request->get('surat_pelayanan_lainnya'),
        'rincian_jenis_surat'              => $request->get('rincian_jenis_surat'),
        'id_loket'                         => $request->get('id_loket'),
        'tujuan_surat_keluar'              => $request->get('tujuan_surat_keluar'),
        'tujuan_surat'                     => $request->get('tujuan_surat'),
        'nrp'                              => $request->get('nrp'),
        'rincian_tujuan_surat'             => $request->get('rincian_tujuan_surat'),
        'kode_surat'                       => $request->get('kode_surat'),
        'tujuan_surat_keluar_lainnya'      => $request->get('tujuan_surat_keluar_lainnya'),
        'pengirim_Surat_Keluar'            => $request->get('pengirim_Surat_Keluar'),
        'keterangan_pengirim_surat_keluar' => $request->get('keterangan_pengirim_surat_keluar')
       ]);
       $arsip-> save();
       return redirect()->route('arsip.form')->with('success','Data Added');

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
        //
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
        //
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
