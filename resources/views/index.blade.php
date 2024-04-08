<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KMD News</title>
  <!-- bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>



  <div class="container p-4 ">
    <div class="text-center">
      <h1 class="">KMD News</h1>
    </div>
    <a href="{{ route('posts.create') }}" class="btn btn-md btn-primary">Add new Post</a>

    <a href="{{ url('/') }}" class="btn btn-primary float-end" tabindex="-1"
    role="button" aria-disabled="true">Back</a>
    <hr>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>


            @foreach ($posts as $post)
             <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ url('show',$post->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ url('edit',$post->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ url('delete',$post->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>

    </div>

</body>
</html>
