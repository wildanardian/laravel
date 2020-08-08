<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{

    public function index(){

        $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan);
        return view('form.index', compact('pertanyaan'));   
    }

    public function create(){
        return view('form.create');
    }

    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert(
            ['judul' => $request["judul"], 'isi' => $request["isi"]]
        );

        return redirect('/pertanyaan')->with('success', 'Post berhasil disimpan');
    }

    public function show($id){
        $pertanyaanSatu = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($pertanyaanSatu);
        return view('form.show', compact('pertanyaanSatu'));
    }

    public function edit($id){
        $pertanyaanSatu = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($pertanyaanSatu);
        return view('form.edit', compact('pertanyaanSatu'));
    }

    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
              ->where('id', $id)
              ->update([
                  'judul' => $request['judul'],
                  'isi' => $request['isi']
              ]);

        return redirect('/pertanyaan')->with('success', 'Berhasil Update Pertanyaan');
    }

    public function destroy($id){
        DB::table('pertanyaan')->where('id', $id)->delete();
        // DB::table('pertanyaan')->truncate();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus');
    }

    
}
