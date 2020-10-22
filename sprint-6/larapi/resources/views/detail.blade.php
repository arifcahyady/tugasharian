@extends('layouts.app')

@section('title') Detail @endsection

@section('content')
	
	<div class="jumbotron jumbotron-fluid">
		<div class="card container" style="width: 80rem;">
			 <img src="/image/{{ $todos->thumbnail }}"  alt="card image cap">
			 <div class="card-body">
			    <h5 class="card-title">{{ $todos->title }}</h5>
			    <p class="card-text">{{ $todos->subjek }}</p>
			    <p class="card-text">{{ $todos->deksripsi }}</p>
				<a href="/home" class="btn btn-info btn-sm">Back</a>
			</div>
		</div>
@endsection