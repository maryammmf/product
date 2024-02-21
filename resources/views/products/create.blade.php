
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
    <form id="registerForm" action="{{route('products.store')}}" method="post">
        @csrf
        <h1>Add a new product</h1>
        <div class="input">
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
        </div>

        @error('name')
        {{$message}}
        @enderror


        <div class="input">
            <input id="nameInput" type="text" name="cost" placeholder="Cost" value="{{old('cost')}}">
        </div>

        @error('cost')
        {{$message}}
        @enderror


        <div class="input">
            <input type="text" name="description" placeholder="Description" value="{{old('description')}}">
{{--            <textarea placeholder="Description" name="description">{{old('description')}}</textarea>--}}
        </div>

        @error('description')
        {{$message}}
        @enderror

        <input type="submit" name="submit" class="btn" value="Add">

    </form>
</div>
</body>
</html>
