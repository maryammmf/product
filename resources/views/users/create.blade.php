
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/createUser.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form id="registerForm" action="{{route('users.store')}}" method="post">
        @csrf
        <h1>Add a new user</h1>
        <div class="input">
            <input type="text" name="first_name" placeholder="First Name" value="{{old('first_name')}}">
        </div>

        @error('first_name')
        {{$message}}
        @enderror


        <div class="input">
            <input id="nameInput" type="text" name="last_name" placeholder="Last Name" value="{{old('last_name')}}">
        </div>

        @error('last_name')
        {{$message}}
        @enderror


        <div class="input">
            <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
        </div>

        @error('email')
        {{$message}}
        @enderror


        <div class="input">
            <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
        </div>

        @error('password')
        {{$message}}
        @enderror


        <input type="submit" name="submit" class="btn" value="Add">

    </form>
</div>
</body>
</html>
