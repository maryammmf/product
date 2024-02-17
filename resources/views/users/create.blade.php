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
<form action="store" method="post" class="m-4 ">
    @csrf
    <div class="mb-4">
        <label for="name" class="form-label">User Name</label>
        <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control shadow-sm bg-light bg-opacity-75">
    </div>

    <div class="mb-4">
        <label for="email" class="form-label">User Email</label>
        <input type="text" name="email" value="{{old('email')}}" id="email" class="form-control shadow-sm bg-light bg-opacity-75">
    </div>

    <div class="mb-4">
        <label for="password" class="form-label">User Password</label>
        <input type="text" name="password" id="password" class="form-control shadow-sm bg-light bg-opacity-75">
    </div>

    <div class="mb-4">
        <input type="submit" name="create" id="create" class="btn form-control btn-light btn-outline-success shadow-sm">
    </div>
</form>
</body>
</html>
