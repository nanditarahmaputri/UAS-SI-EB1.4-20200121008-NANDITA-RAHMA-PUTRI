<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Auth\Events\Validated;
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
        return view('Mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Data Mahasiswa
        $request->validate([
            'nama_mahasiswa' => 'required|unique:mahasiswas|max:100|min:3',
            'alamat' => 'required',
            'no_tlp' => 'integer|required|max:100',
            'email' => 'required|unique:mahasiswas|max:100|min:3',
        ]);
        //  Insert Data Mahasiswa
        try {
            $mahasiswa = new Mahasiswa;
            $mahasiswa->nama_mahasiwa = $request->nama_mahasiswa;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->no_tlp = $request->no_tlp;
            $mahasiswa->email = $request->email;
            $mahasiswa->save();
        } catch (\Throwable $th) {
            // return error
            return redirect('/mahasiswa')->with('error', $th->getMessage());
        }
      
        //    Redirect to Index
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa ' . $request->nama_mahasiswa . ' Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('Mahasiswa.show', ['mahasiswa' => Mahasiswa::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_mahasiswa = Mahasiswa::findOrFail($id);
        return view('Mahasiswa.edit', ['mahasiswa' => $data_mahasiswa]);
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
        // Validate Data Mahasiswa
        $request->validate([
            'nama_mahasiswa' => 'required|unique:mahasiswas|max:100|min:3',
            'alamat' => 'required',
            'no_tlp' => 'integer|required|max:100',
            'email' => 'required|unique:mahasiswas|max:100|min:3',
        ]);

        // Update Data Mahasiswa
        try {
            $mahasiswa = new Mahasiswa;
            $mahasiswa->nama_mahasiwa = $request->nama_mahasiswa;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->no_tlp = $request->no_tlp;
            $mahasiswa->email = $request->email;
            $mahasiswa->save();
        } catch (\Throwable $th) {
            // return error
            return redirect('/mahasiswa/edit/'.$request->id)->with('error', $th->getMessage());
        }
      
        //    Redirect to Index
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa ' . $request->nama_mahasiswa . ' Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete Data Mahasiswa
        try {
            $mhs = Mahasiswa::findOrFail($id);
            $mhs->delete();
        } catch (\Throwable $th) {
            // return error
            return redirect('/mahasiswa')->with('error', $th->getMessage());
        }
      
        //    Redirect to Index
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa ' . $mahasiswa->nama_mahasiswa . ' Berhasil Dihapus');
    }
}
