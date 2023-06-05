<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function index(){
        $pegawai = pegawai::all();
        return view('pegawai.index',compact(['pegawai']));
    }

    public function create()
    {
       return view('pegawai.create');
    }

    public function data_pegawai(Request $request)
    {
        //dd($request->except(['_token','submit']));
        pegawai::create ($request->except(['_token','submit'])); 
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        //dd($id)
        $pegawai = pegawai::find($id);
        return view('pegawai.edit', compact(['pegawai']));
    }

    public function update($id, Request $request)
    {
        $pegawai = pegawai::find($id);
        $pegawai ->update($request->except(['_token','submit']));
        return redirect('/pegawai');
    }

    public function destroy($id)
    {
        $pegawai = pegawai::find($id);
        $pegawai ->delete();
        return redirect('/pegawai');
    }
}
