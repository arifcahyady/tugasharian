@extends('layouts.auth')

@section('title') Register @endsection

@section('content')
  <body class="text-center">
    <div class="container d-flex justify-content-center ">
    	<form class="form-signin" style="width: 400px;" method="post" action="{{ route('register')}}">
      @csrf
		  <h1 class="h3 mb-3 font-weight-normal mt-5 mb-5">Please Register</h1>

      <label for="inputName" class="sr-only">Name</label>
      <input type="text" name="name" id="inputName" class="form-control  mb-3 {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="User Name" value="{{ old('name') }}" required autofocus>

      @if ($errors->has('name'))
        <div class="invalid-feedback">
          {{ $errors->first('name') }}
        </div>
       @endif


		  <label for="inputEmail" class="sr-only">Email address</label>
		  <input type="email" name="email" id="inputEmail" class="form-control  mb-3 {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" value="{{ old('email') }}" required autofocus>


      @if ($errors->has('email'))
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
       @endif

		  <label for="inputPassword" class="sr-only">Password</label>
		  <input type="password" name="password" id="inputPassword" class="form-control  mb-3 {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>


      @if ($errors->has('password'))
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
       @endif

       <label for="inputPassword" class="sr-only">Confirmation Password</label>
      <input type="password" name="confirmation_password" id="inputPassword" class="form-control  mb-5 {{ $errors->has('confirmation_password') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>


      @if ($errors->has('confirmation_password'))
        <div class="invalid-feedback">
          {{ $errors->first('confirmation_password') }}
        </div>
       @endif

		  <button class="btn btn-lg btn-primary btn-block " type="submit">Register</button>
		  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
		</form>
    </div>
@endsection