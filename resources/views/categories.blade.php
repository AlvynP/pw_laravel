{{-- @dd($blog) --}}
@extends('layouts.main')


@section('container')
{{--  --}}
{{--  --}}
{{-- <div class="container"> --}}
  <h1>Categories</h1>

  @foreach ($categories as $c)

  <ul>
    <li>
      <h2><a href="/categories/{{ $c->slug }}"><h2>{{ $c->name }}</h2></a></h2>
    </li>
  </ul>
      {{-- <h5>by : {{ $b["author"] }}</h5> --}}



  @endforeach

{{-- </div> --}}
{{--  --}}
@endsection