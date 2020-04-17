@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is the larvel app from the laravel from scratch.</p>
    <p><a class="btn btn-secondary btn-lg" href="/login" role="button">Login &raquo;</a> <a class="btn btn-primary btn-lg" href="/register" role="button">Register &raquo;</a></p>
  </div>
@endsection
