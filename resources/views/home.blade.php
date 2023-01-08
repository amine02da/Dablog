
@extends('layout')
@section('title') DaBlog @endsection
@section("content")


<div class="home d-flex justify-content-around">
        <div class="allPost ">   
          <h1>Your Posts</h1> 
            <div class="card" style="width: 30rem; max-height: 80%; overflow-y: auto; position:fixed">
                @foreach ($data as $post)
                <div class="card-body">
                <h5 class="card-title">{{$post["title"]}}</h5>
                <p class="card-text">{{$post["description"]}}</p>
                <div class="d-flex justify-content-around">
                <a href="{{route("createPost.edit",$post->id)}}" class="btn btn-primary w-50 h-50">Edit</a>
                <form action="{{route("createPost.destroy",$post->id)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            </div>
            @endforeach
            </div>
        </div>
        <div class="addPost">
          <h1>Create New Post </h1>
            <form method="post" action={{route("createPost.store")}}>
                @csrf
                <div class="mb-3 " >
                  <label for="Title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="Title" aria-describedby="emailHelp" name="title">
                </div>
                <div class="mb-3">
                  <label for="Description" class="form-label">Description</label>
                  <input type="textarea" class="form-control" id="Description" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
              </form> 
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

@endsection