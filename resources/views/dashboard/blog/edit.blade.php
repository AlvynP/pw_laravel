@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Blog</h1>
</div>

<div class="col-lg-10">
  <form method="post" action="/dashboard/blog/{{ $blog->slug }}" class="mb-5">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title', $blog->title) }}">
      @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
              
          @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value="{{ old('slug', $blog->slug) }}">
      @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
              
          @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
        <option class="text-muted" selected disabled required="required">Select Category</option>
        @foreach ($categories as $c)
        @if(old('category_id', $blog->category_id) == $c->id)
        <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
        @else
        <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endif
        @endforeach
      </select>
      @error('category_id')
          <div class="invalid-feedback">{{ $message }}</div>
              
          @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
          <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body', $blog->body) }}">
  <trix-editor input="body"></trix-editor>
    </div>
    
    <button type="submit" class="btn btn-primary">Create blog</button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/blog/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })
</script>
    
@endsection