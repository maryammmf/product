<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('posts.update', $post)}}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$post->title}}">
    </div>

    <div>
        <label for="content">Content</label>
        <input type="text" name="content" value="{{$post->content}}">
    </div>

    <select name="user_id" id="user_id">
        <option disabled>select the user</option>
        @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id == $post->user_id) selected @endif>{{$user->first_name}}</option>
        @endforeach
    </select>

    <input type="submit" value="Edit">
</form>
</body>
</html>

