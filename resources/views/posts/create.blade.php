
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/createPost.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form id="registerForm" action="{{route('posts.store')}}" method="post">
        @csrf
        <h1>Add a new post</h1>
        <div class="input">
            <input type="text" name="title" placeholder="Title" value="{{old('title')}}">
        </div>

        @error('title')
        {{$message}}
        @enderror


        <div class="input">
            <input id="nameInput" type="text" name="content" placeholder="Content" value="{{old('content')}}">
        </div>

        @error('content')
        {{$message}}
        @enderror


        <select name="user_id" id="user_id">
            <option class="selected" selected disabled>select the user</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->first_name}}</option>
            @endforeach
        </select>

        @error('user_id')
        {{$message}}
        @enderror

        <input type="submit" name="submit" class="btn" value="Add">

    </form>
</div>
</body>
</html>


{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <form method="post" action="{{route('posts.store')}}">--}}
{{--        @csrf--}}
{{--        <div>--}}
{{--            <label for="title">Title</label>--}}
{{--            <input type="text" name="title">--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <label for="content">Content</label>--}}
{{--            <input type="text" name="content">--}}
{{--        </div>--}}

{{--        <select name="user_id" id="user_id">--}}
{{--            <option selected disabled>select the user</option>--}}
{{--            @foreach($users as $user)--}}
{{--                <option value="{{$user->id}}">{{$user->first_name}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}

{{--        <input type="submit" value="Create">--}}
{{--    </form>--}}
{{--</body>--}}
{{--</html>--}}
