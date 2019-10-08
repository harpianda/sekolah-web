<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mendapatkan semua data pada database 
        $members = Member::all();
        return view('members.index', compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('members.create');
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
        // Member::create([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        Member::create($request->all());
        return redirect('/members')->with('status', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        //
        Member::where('id',$member->id)
        ->update([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'password'=> $request->password
        ]);

        return redirect('/members')->with('status', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
        Member::destroy($member->id);
        return redirect('/members')->with('status', 'Data Berhasil di Hapus');
    }
}
