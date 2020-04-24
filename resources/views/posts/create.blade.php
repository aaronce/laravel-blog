@extends('layouts.app')

@section('content')
  <h1>Create Post</h1>
    <form action="{{route('posts.store')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title"/>
      </div>

      <div class="form-group">
        <label for="body">Body</label>
        <textarea id="summernote" class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
