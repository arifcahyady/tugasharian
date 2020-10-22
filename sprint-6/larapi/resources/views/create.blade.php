@extends('layouts.app')

@section('title') Halaman buat baru @endsection

@section('content')
	
	<h1 class="mb-3 mt-5 container-fluid">Buat Artikel baru</h1>
  <div class="mb-5 mt-5">
    <a href="/home" class="btn btn-primary ml-3 mr-2">Artikel+</a>
    <a href="/home/create" class="btn btn-primary">New</a>
  </div>

	<form action="/home" method="post" enctype="multipart/form-data">
		@csrf
 
  <div class="form-group container">
    <label for="title">Judul</label>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
  
  	@error('title')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror

	<div class="form-group">
    <label for="title">Subjek</label>
    <input type="text" class="form-control" id="subjek" name="subjek" value="{{old('subjek')}}">
  
  	@error('subjek')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror

  </div>
  <div class="form-group">
    <label for="title">Deksripsi</label>
    <textarea type="text" class="form-control" id="deksripsi" name="deksripsi" rows="3">
  		{{old('deksripsi')}}
  	</textarea>
	@error('deksripsi')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
	</div>

	<div class="form-group">
    <label for="thumbnail">Upload gambar</label>
    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
  	</div>

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection