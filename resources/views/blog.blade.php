{{-- @dd($blog) --}}
@extends('layouts.main')


@section('container')
{{--  --}}
{{--  --}}
{{-- <div class="container"> --}}
  <h1>{{ $title }} | <a href="/categories">Category</a></h1>

@if ($blog->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400/?{{ $blog[0]->category->name }}" class="card-img-top" alt="...">
  <div class="card-body">
    <a class="text-decoration-none" href="/blog/{{ $blog[0]->slug }}"><h5 class="card-title">{{ $blog[0]->title }}</h5></a>
    <p>By. <a href="/authors/{{ $blog[0]->author->username }}">{{ $blog[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $blog[0]->category->slug }}">{{ $blog[0]->category->name }}</a></p>
    <p class="card-text">{{ $blog[0]->excerpt }} <a class="text-decoration-none" href="/blog/{{ $blog[0]->slug }}">Read More..</a></p>
    <p class="card-text"><small class="text-muted">Last updated {{ $blog[0]->updated_at->diffForHumans() }}</small></p>
  </div>
</div>
@else
<p class="text-center fs-4">No blog found.</p>
@endif

  


<div class="container">
  <div class="row">
    @foreach ($blog->skip(1) as $b)
    <div class="col-md-4 mb-3">
      <div class="card">
        <a class="text-decoration-none text-white" href="/categories/{{ $b->category->slug }}"><div class="position-absolute px-2 py-1" style="background-color: rgba(0, 0, 0, 0.4)">{{ $b->category->name }}</div></a>
        <img src="https://source.unsplash.com/500x300/?{{ $b->category->name }}" class="card-img-top" alt="{{ $b->category->name }}">
        <div class="card-body">
          <a class="text-decoration-none" href="/blog/{{ $b->slug }}"><h5 class="card-title">{{ $b->title }}</h5></a>
          <p>
            <small class="text-muted">
              By. <a href="/authors/{{ $b->author->username }}">{{ $b->author->name }}</a>
              in <a class="text-decoration-none" href="/categories/{{ $b->category->slug }}">{{ $b->category->name }}</a>
            </small>
          </p>
          <p class="card-text">{{ $b->excerpt }}</p>
          <small class="text-muted">Last updated {{ $blog[0]->updated_at->diffForHumans() }}</small>
          <a href="/blog/{{ $b->slug }}" class="btn btn-primary d-block mt-1">Read More..</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>



  {{-- @foreach ($blog->skip(1) as $b)
    <article class="mb-3 border-bottom">
      <a class="text-decoration-none" href="/blog/{{ $b->slug }}"><h2>{{ $b->title }}</h2></a>

      <p>By. <a href="/authors/{{ $b->author->username }}">{{ $b->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $b->category->slug }}">{{ $b->category->name }}</a></p>
      
      <p>{{ $b->excerpt }}</p>

      <a class="text-decoration-none" href="/blog/{{ $b->slug }}">Read More..</a>
    </article>

  @endforeach --}}

{{-- </div> --}}
{{--  --}}
@endsection