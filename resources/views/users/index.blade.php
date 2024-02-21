<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link rel="stylesheet" href="{{asset('css/indexUser.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Users</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('users.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
                </th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                    <tr>
                        <td>
                        </td>
                        <td><a href="{{route('users.show', $user)}}">{{$user->first_name}}</a></td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>

            @endforeach
            </tbody>
        </table>
{{--        <div class="clearfix">--}}
{{--            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>--}}
{{--            <ul class="pagination">--}}
{{--                <li class="page-item disabled"><a href="#">Previous</a></li>--}}
{{--                <li class="page-item"><a href="#" class="page-link">1</a></li>--}}
{{--                <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
{{--                <li class="page-item active"><a href="#" class="page-link">3</a></li>--}}
{{--                <li class="page-item"><a href="#" class="page-link">4</a></li>--}}
{{--                <li class="page-item"><a href="#" class="page-link">5</a></li>--}}
{{--                <li class="page-item"><a href="#" class="page-link">Next</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
</div>

</body>
</html>
