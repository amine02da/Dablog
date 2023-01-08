@extends('layout')
@section('title') DaBlog @endsection
@section("content")
@foreach ($data as $post)
<div class="card m-5">
    <div class="card-header">
      @foreach ($datauser as $user)
      @if($post->id_user ==  $user->id)
          {{$user->name}}
      @endif
      @endforeach
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post["title"]}} </h5>
      <p class="card-text">{{$post["description"]}}</p>
    </div>
  </div>
@endforeach
@endsection