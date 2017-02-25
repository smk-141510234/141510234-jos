<?php

namespace App\Http\Controllers;

use Request;
use App\penggajian;
use Validator;
use Input;
use App\tunjangan_pegawai;

class penggajiancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penggajian = penggajian::all();
        return view('penggajian.index',compact('penggajian')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $penggajian=penggajian::all();
        $tunjangan_pegawai=tunjangan_pegawai::all();
        return view ('penggajian.create',compact('tunjangan_pegawai,penggajian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

          $penggajian=Request::all();
         $rules=['status_pengembilan'=>'required|unique:golongans',
                 'petugas_penerima'=>'required|unique:golongans'];
         $message=[
         'tunjangan_pegawai_id.unique'=>'Masukan Sudah Ada','kode_golongan.required'=>'Kolom Jangan Kosong',
         'tanggal_pengabilan.unique'=>'Masukan Sudah Ada','nama_golongan.required'=>'Kolom Jangan Kosong',
         'status_pengambilan.unique'=>'Masukan Sudah Ada','besaran_uang.required'=>'Kolom Jangan Kosong',
         'petugas_penerima.unique'=>'Masukan Sudah Ada','besaran_uang.required'=>'Kolom Jangan Kosong'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/penggajian/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         
         golongan::create($penggajian);
         return redirect('penggajian');
        }
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
