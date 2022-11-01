{{-- @dd($blog) --}}
@extends('layouts.main')


@section('container')
{{--  --}}
{{--  --}}
{{-- <div class="container"> --}}
  <h1>Blog</h1>

  @foreach ($blog as $b)
    <article class="mb-5">
      <a href="/blog/{{ $b->slug }}"><h2>{{ $b->title }}</h2></a>
      {{-- <h5>by : {{ $b["author"] }}</h5> --}}
      <p>{{ $b->excerpt }}</p>
    </article>

  @endforeach

{{-- </div> --}}
{{--  --}}
@endsection