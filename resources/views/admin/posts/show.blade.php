@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{$post->title}}</h1>
  <p>{{$post->content}}</p>

  <a class="btn btn-info" href="#">EDIT</a>
  <a class="btn btn-danger" href="#">DELETE</a>
</div>
@endsection
