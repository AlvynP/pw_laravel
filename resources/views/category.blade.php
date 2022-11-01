{{-- @dd($blog) --}}
@extends('layouts.main')


@section('container')
{{--  --}}
{{--  --}}
{{-- <div class="container"> --}}
  <h1>Category : {{ $category }}</h1>

  @foreach ($blog as $b)
    <article class="mb-5">
      <a href="/blog/{{ $b->slug }}"><h2>{{ $b->title }}</h2></a>

      <p>By. <a href="/authors/{{ $b->author->username }}">{{ $b->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $b->category->slug }}">{{ $b->category->name }}</a></p>
      {{-- <h5>by : {{ $b["author"] }}</h5> --}}
      <p>{{ $b->excerpt }}</p>

      <a class="text-decoration-none" href="/blog/{{ $b->slug }}">Read More..</a>
    </article>

  @endforeach

{{-- </div> --}}
{{--  --}}
@endsection