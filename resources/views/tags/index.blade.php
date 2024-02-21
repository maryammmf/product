<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tags</title>
    <link rel="stylesheet" href="{{asset('css/indexProduct.css')}}">
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
                    <h2>Manage <b>tags</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('tags.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Tag</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
                </th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>
                    </td>
                    <td><a href="{{route('tags.show', $tag)}}">{{$tag->name}}</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>


