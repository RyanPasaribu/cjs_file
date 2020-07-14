<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
    	$data_guru = \App\Guru::all();
    	return view('guru.index', ['data_guru' => $data_guru]);
    }

    public function create(Request $request)
    {
    	\App\Guru::create($request->all());
    	return redirect('/guru')->with('sukses', 'Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$guru = \App\Guru::find($id);
    	return view('guru/edit', ['guru' => $guru]);
    }

    public function update(Request $request, $id)
    {
    	$guru = \App\Guru::find($id);
    	$guru->update($request->all());
    	return redirect('/guru')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$guru = \App\Guru::find($id);
    	$guru->delete($guru);
    	return redirect('/guru')->with('sukses', 'Data Berhasil Dihapus');
    }
}
