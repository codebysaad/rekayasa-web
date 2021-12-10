@extends('layouts.utama')

@section('konten')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<main class="form-signin">
  <form method="post" action="/login">
    @csrf
    <h1 class="h3 mb-4 fw-normal">Silahkan Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" name='email' placeholder="name@example.com">
      <label for="email">Email</label>
      @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name='password' id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>

@endsection