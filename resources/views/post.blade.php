{{-- @dd($post); --}}
@extends('layouts.main')

@section('container')


<div class="container">
  <div class="row">
    <div class="col-md-8">
      <article>
        <h2>{{ $post->title }}</h2>
        <p>By. <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
      {{-- <h5>{{ $post['author'] }}</h5> --}}
      {{-- {{ $post->body }} --}}
      <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="...">
      {!! $post->body !!}
      </article>
      <a class="mt-3 d-block" href="/blog">Back to article</a>
    </div>
  </div>
</div>





{{-- <article>
  <h2>{{ $post->title }}</h2>
  <p>By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post->body !!}
</article>
<a class="mt-3 d-block" href="/blog">Back to article</a> --}}
@endsection