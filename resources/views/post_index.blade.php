@extends('layouts.app')

@section('content')
  @foreach ($posts as $post)
  <div>{{ $post->user_id }}</div>
  <div>{{ $post->title }}</div>
  <div>{{ $post->comment }}</div>
  @endforeach
@endsection
