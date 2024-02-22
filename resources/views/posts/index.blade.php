<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
<div class=" ">
    <a href="posts/create" class="text-white fw-bold text-decoration-none bg-primary text-center form-control">Create a new post</a>
</div>
    <table class="table table-bordered text-center">
        <thead>
            <tr class="table-primary">
                <th>title</th>
                <th>content</th>
                <th>user</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->user_id}}</td>
            <td>
                <form action="posts/edit/{{$post['id']}}" method="post">
                    @csrf
                    <input type="submit" name="edit" value="edit">
                </form>
            </td>
            <td>
                <form action="posts/destroy/{{$post['id']}}" method="post">
                    @csrf
                    <input type="submit" name="destroy" value="delete">
                </form>
            </td>
        </tbody>

        @endforeach

    </table>

</body>
</html>
