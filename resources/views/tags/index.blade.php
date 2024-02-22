<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class=" ">
    <a href="tags/create" class="text-white fw-bold text-decoration-none bg-primary text-center form-control">Create a new Tag</a>
</div>
    <table class="table table-bordered text-center">
        <thead class="table-primary">
        <tr>
            <th>tag name</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)

            <td>{{$tag->name}}</td>
            <td>
                <form action="tags/edit/{{$tag['id']}}" method="post">
                    @csrf
                    <input type="submit" name="edit" value="edit">
                </form>
            </td>
            <td>
                <form action="tags/destroy/{{$tag['id']}}" method="post">
                    @csrf
                    <input type="submit" name="destroy" value="delete">
                </form>
            </td>
        </tbody>
        @endforeach
    </table>

</body>
</html>
