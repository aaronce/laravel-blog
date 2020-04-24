@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if (count($posts) > 0)
      @foreach ($posts as $post)
          <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$post->title}}</h3>
                <p class="card-subtitle mb-2 text-muted">Written on {{$post->created_at}}</p>
                <p class="card-text">{{$post->body}}</p>
                <a href="/posts/{{$post->id}}" class="card-link">Read {{$post->title}}</a>
                <a href="#" class="card-link">Another link</a>
            </div>
          </div>
      @endforeach
      {{$posts->links()}}
  @else
      <p>No posts found.</p>
  @endif
@endsection
