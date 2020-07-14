<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
    	$data_mapel = \App\Mapel::all();
    	return view('mapel.index', ['data_mapel' => $data_mapel]);
    }

    public function create(Request $request)
    {
    	\App\Mapel::create($request->all());
    	return redirect('/mapel')->with('sukses', 'Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$mapel = \App\Mapel::find($id);
    	return view('mapel/edit', ['mapel' => $mapel]);
    }

    public function update(Request $request, $id)
    {
    	$mapel = \App\Mapel::find($id);
    	$mapel->update($request->all());
    	return redirect('/mapel')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$mapel = \App\Mapel::find($id);
    	$mapel->delete($mapel);
    	return redirect('/mapel')->with('sukses', 'Data Berhasil Dihapus');
    }
}