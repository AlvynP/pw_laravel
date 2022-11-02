{{-- @dd($blog) --}}
@extends('layouts.main')


@section('container')
{{--  --}}
{{--  --}}
{{-- <div class="container"> --}}
  <h1>Categories</h1>


  <div class="container">
    <div class="row">
      @foreach ($categories as $c)
      <div class="col-md-4">
        <div class="card text-bg-dark">
          <a href="/categories/{{ $c->slug }}">
          <img src="https://source.unsplash.com/500x500/?{{ $c->name }}" class="card-img" alt="{{ $c->name }}">
          <div class="card-img-overlay d-flex align-items-center p-0" >
            <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.4)">{{ $c->name }}</h5>
            {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small>Last updated 3 mins ago</small></p> --}}
          </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  {{-- @foreach ($categories as $c)

  <ul>
    <li>
      <h2><a href="/categories/{{ $c->slug }}"><h2>{{ $c->name }}</h2></a></h2>
    </li>
  </ul>


  @endforeach --}}

{{-- </div> --}}
{{--  --}}
@endsection