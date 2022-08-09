<?php

namespace App\Http\Controllers\Api;

use App\models\Mahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('updated_at', 'desc')->paginate(10);
        return response()->json([
            'success' => true,
            'message' => 'Data Mahasiswa',
            'data' => $mahasiswa,
        ], 200);
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
            'nama_mahasiswa' => 'required|unique:mahasiswas|max:100|min:3',
            'alamat' => 'required',
            'no_tlp' => 'integer|required|max:100',
            'email' => 'required|unique:mahasiswas|max:100|min:3',
        ]);

        $Mahasiwa = Mahasiswa::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
        ]);

        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Mahasiswa Berhasil Ditambahkan',
                'data' => $mahasiswa,
            ], 200);
        }else{
            return response()->json([
                'success' => true,
                'message' => 'Mahasiswa Gagal Ditambahkan',
                'data' => $mahasiswa,
            ], 409);
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
