@extends('layouts.app')

@section('content')
<p><a href="/posts" class="btn btn-primary">Go Back</a></p>
  <h1>{{$post->title}}</h1>
    <div>
        <p>{{$post->body}}</p>
    </div>
    <hr>
    <p>Written on {{$post->created_at}}</p>
@endsection
