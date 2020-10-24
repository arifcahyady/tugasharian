@extends('layouts.app')

@section('title') Halaman utama @endsection

@section('content')

<h1 class="mb-3 mt-5 container-fluid">Hello World Save Zone</h1>
  <div class="mb-5 mt-5">
    <a href="/home" class="btn btn-primary ml-3 mr-2">Artikel+</a>
    <a href="/home/create" class="btn btn-primary">New</a>
  </div>

  @foreach ($todos as $todo)
    <div class="card mb-4 text-primary container mb-5 mt-5" style="width: 80rem;">
      <img src="/image/{{ $todo->thumbnail }}" class="card-img-top" alt="card image cap">
      <div class="card-body">
        <div class="h1 font-weight-light"> {{ $todo->title }} </div>
        <div class="h5 font-weight-bold text-secondary">{{ $todo->subjek }}</div>
        <div class="d-flex flex-row bd-highlight mb-3 col4 flex-fill">
           <a href="/home/{{$todo->slug}}" class="btn btn-info mt-3 mr-2">Detail</a>
           
        </div>
        <div class="d-flex justify-content-end">
          <a href="/home/{{$todo->id}}/edit" class="btn btn-info mt-3 mr-2">edit 
           <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
        </svg>
          </svg>
        </a>
          <form action="/home/{{ $todo->id}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger mt-4">hapus<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
              </button>
            </form>
        </div>
      </div>
    </div>
     @endforeach
     <div class="container">
      {{ $todos->links() }}
     </div>

@endsection