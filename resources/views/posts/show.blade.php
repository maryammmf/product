<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>User Id</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->user_id}}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{route('posts.edit',$post)}}">Edit</a>
    <form action="{{route('posts.destroy', $post)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
</body>
</html>
