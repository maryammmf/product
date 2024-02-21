<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/showProduct.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<table>
    <body>
    <div class="container">
        <div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>
                    </th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    </td>
                    <td>{{$tag->name}}</td>

                    <td class="d-flex">
                        <a href="{{route('tags.edit', $tag)}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger">
                                <i class="material-icons">&#xE872;</i>
                            </button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    </body>

</table>
<a href="{{route('tags.index')}}">back</a>
</body>
</html>


