@extends('layouts.main')

@section('container')


<div class="row justify-content-center">
  <div class="col-md-5">

    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post">
        @csrf
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
    
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" required>
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
              
          @enderror
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"  placeholder="Username" value="{{ old('username') }}" required>
          @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
              
          @enderror
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"  placeholder="name@example.com" value="{{ old('email') }}" required>
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
              
          @enderror
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"  placeholder="Password" required>
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
              
          @enderror
          <label for="password">Password</label>
        </div>
    
        {{-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> --}}
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
      </form>
      <small class="mt-5">Already Registered? <a href="/login">Login!</a></small>
    </main>
  </div>
</div>



@endsection