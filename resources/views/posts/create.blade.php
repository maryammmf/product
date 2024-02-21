<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('posts.store')}}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>

        <div>
            <label for="content">Content</label>
            <input type="text" name="content">
        </div>

        <select name="user_id" id="user_id">
            <option selected disabled>select the user</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->first_name}}</option>
            @endforeach
        </select>

        <input type="submit" value="Create">
    </form>
</body>
</html>
