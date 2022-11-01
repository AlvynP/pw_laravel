{{-- @dd($post); --}}
@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>
  <p>By. Alvyn Papalia in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{{-- <h5>{{ $post['author'] }}</h5> --}}
{{-- {{ $post->body }} --}}
{!! $post->body !!}
</article>
<a href="/blog">Back to article</a>
@endsection