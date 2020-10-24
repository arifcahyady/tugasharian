@extends('layouts.app')

@section('title') Edit @endsection

@section('content')
	<h1 class="mb-3 mt-5 container-fluid">Update artikel</h1>
	<div class="mb-5 mt-5">
		<a href="/home" class="btn btn-primary ml-3 mr-2">Artikel+</a>
		<a href="/home/create" class="btn btn-primary">New</a>
	</div>

	<form action="/home/{{$todos->id}}" method="post">
		@csrf
    @method('PUT')

  <div class="form-group container">
    <label for="title">Judul</label>
    <input type="text" class="form-control" id="title" name="title" 
    value="{{old('title') ? old('title') :   $todos->title }}">
  
  	@error('title')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
  </div>

  <div class="form-group container">
    <label for="title">Subjek</label>
    <input type="text" class="form-control" id="subjek" name="subjek" 
    value="{{old('subjek') ? old('subjek') :   $todos->subjek }}">
  
  	@error('subjek')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
  </div>

  <div class="form-group container">
    <label for="title">Deksripsi</label>
    <textarea type="text" class="form-control" id="deksripsi" name="deksripsi" rows="3">
  		{{old('deksripsi') ? old('deksripsi') :   $todos->deksripsi }}
  	</textarea>
	@error('deksripsi')
    	<div class="alert alert-danger">{{ $message }}</div>
	@enderror
	</div>

	
  <button type="submit" class="btn btn-primary mt-4 ml-5">Submit</button>
</form>
@endsection