@extends('layouts.app')

@section('content')
  <h3>{{ $message }}</h3>
  <p>{{ $id }}</p>
  <p>{{ $name}}</p>
  <img src="{{asset('storage/public/images/'.$image_icon)}}" class="d-block rounded-circle mb-3">
  <div>{{$comment}}</div>
@endsection