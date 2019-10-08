<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('schools.create');
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
        $request->validate([
            'npsn' => 'required',
            'namasekolah' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jenis' => 'required',
            'emailmember' => 'required'
        ]);

        School::create($request->all());
        return redirect('/schools')->with('status', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
        return view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $request->validate([
            'npsn' => 'required',
            'namasekolah' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jenis' => 'required',
            'emailmember' => 'required'
        ]);
        //
        School::where('id',$school->id)
        ->update([
            'namasekolah'=> $request->namasekolah,
            'alamat'=> $request->alamat,
            'provinsi'=> $request->provinsi,
            'kabupaten'=> $request->kabupaten,
            'kecamatan'=> $request->kecamatan,
            'kelurahan'=> $request->kelurahan,
            'jenis'=> $request->jenis,
            'emailmember'=> $request->emailmember
        ]);
        //
        return redirect('/schools')->with('status', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
        School::destroy($school->id);
        return redirect('/schools')->with('status', 'Data Berhasil di Hapus');
    }
}
