<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesantren;

class pesantrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pesantren::all();
        return view('pesantren', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => 'required',
            'pimpinan' => 'required',
            'ormas' => 'required',
            'no_telp' => 'required',
            'kurikulum' => 'required',
            'fasilitas' => 'required',
            'alamat' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);
        $file = $request->file('filename');
        $destinationPath = 'foto';
        $file->move($destinationPath,$file->getClientOriginalName());
        $data = new Pesantren();
        $data->nama = $request->nama;
        $data->pimpinan = $request->pimpinan;
        $data->ormas = $request->ormas;
        $data->no_telp = $request->no_telp;
        $data->kurikulum = $request->kurikulum;
        $data->fasilitas = $request->fasilitas;
        $data->alamat = $request->alamat;
        $data->longitude = $request->longitude;
        $data->latitude = $request->latitude;
        $data->foto = $file->getClientOriginalName();
        $data->save();
        return redirect()->route('pesantren.index')->with('status', 'Pesantren Berhasil Ditambah!');
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
        $data = Pesantren::where('id', $id)->get();
         return view('pesantrenEdit', compact('data', 'id'));
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
        $this->validate($request, [
            'nama' => 'required',
            'pimpinan' => 'required',
            'ormas' => 'required',
            'no_telp' => 'required',
            'kurikulum' => 'required',
            'fasilitas' => 'required',
            'alamat' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);
        $data = Pesantren::where('id', $id)->firstOrFail();
        $file = "./foto/". $data->foto;
        unlink($file);
        $file = $request->file('filename');
        $destinationPath = 'foto';
        $file->move($destinationPath,$file->getClientOriginalName());
        $data->nama = $request->nama;
        $data->pimpinan = $request->pimpinan;
        $data->ormas = $request->ormas;
        $data->no_telp = $request->no_telp;
        $data->kurikulum = $request->kurikulum;
        $data->fasilitas = $request->fasilitas;
        $data->alamat = $request->alamat;
        $data->longitude = $request->longitude;
        $data->latitude = $request->latitude;
        $data->foto = $file->getClientOriginalName();
        $data->save();
        return redirect()->route('pesantren.index')->with('status', 'Pesantren Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pesantren::where('id', $id)->firstOrFail();
        $file = "./foto/". $data->foto;
        unlink($file);
        Pesantren::destroy($id);
        return redirect()->route('pesantren.index')->with('status', 'Pesantren Berhasil Dihapus!');
    }
}
