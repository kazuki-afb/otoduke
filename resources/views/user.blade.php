@extends('layouts.app')

@section('content')
  <h3>{{ $message }}</h3>
  <p>{{ $id }}</p>
  <p>{{ $name}}</p>
  <div>{{$comment}}</div>
@endsection