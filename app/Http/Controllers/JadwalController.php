<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all('id', 'jadwal');
        $jadwal = Jadwal::orderBy('updated_at', 'desc')->paginate(10);
        return view('Jadwal.index', ['jadwal' => $jadwal]);
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
            'jadwal' => 'required|max:255',
            'matakuliah_id' => 'required|unique:jadwals|',
        ]);

        $data = new Jadwal();
        $data->jadwal = $request->jadwal;
        $data->matakuliah_id = $request->matakuliah_id;
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
        $jadwal = Jadwal::where('id', $id)->first();
        return view('jadwal.edit', ['jadwal' => $jadwal]);
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
            'jadwal' => 'required|max:255',
            'matakuliah_id' => 'required|unique:jadwals|',
        ]);
        friends::find($id)->update([
            'jadwal' => $request->jadwal,
            'matakuliah_id' => $request->matakuliah_id,
        ]);

        return redirect('jadwal');
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
            Jadwal::find($id)->delete();
            return redirect('jadwal');
        }
    }
}
