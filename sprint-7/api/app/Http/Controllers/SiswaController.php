<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
    	$data = Siswa::all();
    	return view('siswa.index', compact('data'));
    }

    public function create(Request $request)
    {
    	Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses', 'Data Berhasil di tambah kan');
    }
}
