@extends('layouts.auth')

@section('title') Login @endsection

@section('content')
  <body class="text-center">
    <div class="container d-flex justify-content-center ">
    	<form class="form-signin" style="width: 400px;" method="post" action="{{ route('login') }}">
    	@csrf
		  <h1 class="h3 mb-3 font-weight-normal mt-5 mb-5">Please Login</h1>
		  <label for="inputName" class="sr-only">Name</label>
		  <input type="text" name="name" id="inputName" class="form-control  mb-3" placeholder="Username" required autofocus>
		  <label for="inputEmail" class="sr-only">Email address</label>
		  <input type="email" id="inputEmail" class="form-control  mb-3" placeholder="Email address" required autofocus>
		  <label for="inputPassword" class="sr-only">Password</label>
		  <input type="password" id="inputPassword" class="form-control  mb-3" placeholder="Password" required>
		  <div class="checkbox mb-3">
		    <label>
		      <input type="checkbox" value="remember-me"> Remember me
		    </label>
		  </div>
		  <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
		  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
		</form>
    </div>
@endsection