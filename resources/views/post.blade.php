{{-- @dd($post); --}}
@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>
{{-- <h5>{{ $post['author'] }}</h5> --}}
{{-- {{ $post->body }} --}}
{!! $post->body !!}
</article>
<a href="/blog">Back to article</a>
@endsection