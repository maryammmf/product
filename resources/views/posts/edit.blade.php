
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
    <form id="registerForm" action="{{route('posts.update', $post)}}" method="post">
        @csrf
        @method('PUT')
        <h1>Edit</h1>
        <div class="input">
            <input type="text" name="title" placeholder="Name" value="{{$post->title}}">
        </div>

        @error('title')
        {{$message}}
        @enderror


        <div class="input">
            <input id="nameInput" type="text" name="content" placeholder="Cost" value="{{$post->content}}">
        </div>

        @error('content')
        {{$message}}
        @enderror


        <select name="user_id" id="user_id">
            <option class="selected" selected disabled>select the user</option>
            @foreach($users as $user)
                <option value="{{$user->id}}" @if($user->id == $post->user_id) selected @endif>{{$user->first_name}}</option>
            @endforeach
        </select>

        @error('user_id')
        {{$message}}
        @enderror

        <input type="submit" name="submit" class="btn" value="Save">

    </form>
</div>
</body>
</html>
