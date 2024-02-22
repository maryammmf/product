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
<form action="../update/{{$post['id']}}" method="post" class="m-4 bc">
    @csrf

    <div class="mb-4">
        <label for="title"  class="form-label">Post Title</label>
        <input type="text" name="title" value="{{$post['title']}}" id="title" class="form-control shadow-sm  bg-light bg-opacity-75">
        @error('title')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>


    <div class="mb-4">
        <label for="content" class="form-label ">Post Content</label>
        <textarea type="text" name="content"  id="content" class="form-control shadow-sm bg-light bg-opacity-75">{{$post['content']}}</textarea>
        @error('content')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="user_id" class="form-label">User ID</label>
        <select type="number" name="user_id" id="user_id" class="form-select shadow-sm bg-light bg-opacity-75">
            <option disabled >select a user ID</option>
            @foreach($userId as $user)
                <option value="{{$user}}">{{$user}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <input type="submit" value="Edit" name="edit" id="edit" class="btn form-control btn-light btn-outline-success shadow-sm">
    </div>
</form>
</body>
</html>
