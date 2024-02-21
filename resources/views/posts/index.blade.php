<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>title</th>
                <th>content</th>
                <th>user</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
           <tr>
               <td><a href="{{route('posts.show', $post)}}">{{$post->title}}</a></td>
               <td>{{$post->content}}</td>
               <td>{{$post->user_id}}</td>
           </tr>
        </tbody>
        @endforeach

    </table>
    <a href="{{route('posts.create')}}">Create a new post</a>
</body>
</html>
