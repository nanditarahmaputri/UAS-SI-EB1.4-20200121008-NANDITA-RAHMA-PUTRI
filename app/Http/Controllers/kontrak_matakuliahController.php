<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kontrakmatakuliah;

class kontrak_matakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrak_matakuliah = kontrakmatakuliah::all();
        return view('kontrakmatakuliah.index', ['kontrakmatakuliah' => $kontrak_matakuliah]);
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
        $request->validate([
            'mahasiswa_id' => 'required|max:255',
            'matakuliah_id' => 'required|unique:jadwals|',
        ]);

        $data = new kontrak_matakuliah();
        $data->nama_mahasiswa = $request->nama_mahasiswa;
        $data->semester_id = $request->semester_id;
        $data->save();

        return redirect('jadwal');
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
        $kontrak_matakuliah = kontrak_matakuliah::where('id', $id)->first();
        return view('kontrak_matakuliah.edit', ['kontrak_matakuliah' => $kontrak_matakuliah]);
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
        $request->validate([
            'mahasiswa_id' => 'required|max:255',
            'semester_id' => 'required|unique:jadwals|',
        ]);
        friends::find($id)->update([
            'mahasiswa_id' => $request->jadwal,
            'semester_id' => $request->matakuliah_id,
        ]);

        return redirect('kontrak_matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            kontrak_matakuliah::find($id)->delete();
            return redirect('kontrak_matakuliah');
        }
    }
}
