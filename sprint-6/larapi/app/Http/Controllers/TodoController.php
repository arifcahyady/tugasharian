<?php

namespace App\Http\Controllers;

use App\Todos;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class TodoController extends Controller
{
  
  public function index(){
    $todos = Todos::orderBy('id', 'desc')->paginate(3);

    return view('index', compact('todos'));
  }


  public function show($slug) {
    // die($slug);
    $todos = Todos::where('slug', $slug)->first();
    return view('detail', compact('todos'));

  }

  public function create() {
    return view('create');
  }

  public function store(Request $request) {
    
      // dd($request->thumbnail);

     $request->validate([
      
        'title' => ['required', 'max:255', 'min:3'],
        'subjek' => ['required', 'min:3', 'max:100'],
        'deksripsi' => ['required', 'min:3'],
        'thumbnail' => ['mimes:jpeg,png,jpg,svg,tmp']
  ]);

     $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();

     $request->thumbnail->move(public_path('image'), $imgName);

    $todos = new Todos;
    $todos->title = $request->title;
    $todos->slug = Str::slug($request->title . '-' . Str::random(7), '-');
    $todos->subjek = $request->subjek;
    $todos->deksripsi = $request->deksripsi;
    $todos->thumbnail = $imgName;
    $todos->save();

    return redirect('/home');
  }

  public function edit($id) {
    $todos = Todos::find($id);
    return view('edit', compact('todos'));
  }

  public function update(Request $request, $id) {
    $todos = Todos::find($id);
    $todos->title = $request->title;
    $todos->subjek = $request->subjek;
    $todos->deksripsi = $request->deksripsi;
    $todos->save();

    return redirect('/home');
  }

  public function destroy($id) {
    // dd('hapus' . $id);
    $todos = Todos::find($id)->delete();

    return redirect('/home');
  } 
}
