<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class=" ">
    <a href="users/create" class="text-white fw-bold text-decoration-none bg-primary text-center form-control" >Create a new User</a>
</div>
    <table class="table table-bordered text-center">
        <thead>
        <tr class="table-primary ">
            <th>User Name</th>
            <th>User Email</th>
            <th>User Password</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <form action="users/edit/{{$user['id']}}" method="post">
                        @csrf
                        <input type="submit" name="edit" value="edit">
                    </form>
                </td>
                <td>
                    <form action="users/destroy/{{$user['id']}}" method="post">
                        @csrf
                        <input type="submit" name="destroy" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

</body>
</html>
