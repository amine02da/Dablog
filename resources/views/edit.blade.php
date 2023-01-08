<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Edit Post</title>
</head>
<body>
    <div class="addPost">
        <form method="post" action="{{route("createPost.update",$data->id)}}" >
            @csrf
            @method("PUT")
            <div class="mb-3">
              <label for="Title" class="form-label" >Title</label>
              <input type="text" class="form-control" value="{{$data->title}}"id="Title" aria-describedby="emailHelp" name="title">
            </div>
            <div class="mb-3">
              <label for="Description" class="form-label">Description</label>
              <input type="textarea" class="form-control" value="{{$data->description}}" id="Description" name="description">
            </div>
            <button type="submit">Edit</button>
          </form>
    </div>
</body>
</html>