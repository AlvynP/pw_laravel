@extends('dashboard.layouts.main')


@section('container')

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <article>
        <h2>{{ $blog->title }}</h2>

        <a href="/dashboard/blog" class="btn btn-success"><span data-feather="arrow-left"></span>Back to Post</a>
        <a href="/dashboard/blog/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
        {{-- <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a> --}}
        <form action="/dashboard/blog/{{ $blog->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger"><span data-feather="x-circle" onclick="return confirm('Are you sure?')"></span>Delete</button>
        </form>
        {{-- <p>By. <a href="/blog?author={{ $blog->author->username }}">{{ $blog->author->name }}</a> in <a href="/blog?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a></p> --}}
      {{-- <h5>{{ $blog['author'] }}</h5> --}}
      {{-- {{ $blog->body }} --}}
      <img src="https://source.unsplash.com/1200x400/?{{ $blog->category->name }}" class="card-img-top mt-2" alt="...">
      <p class="text-muted">{{ $blog->category->name }}</p>
      {!! $blog->body !!}
      </article>
      {{-- <a class="mt-3 d-block" href="/blog">Back to article</a> --}}
    </div>
  </div>
</div>

@endsection