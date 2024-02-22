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
<div >
    <a href="products/create" class="text-white fw-bold text-decoration-none bg-primary text-center form-control" >Create a new Product</a>
</div>
<table class="table table-bordered text-center">
    <thead>
    <tr class="table-primary">
        <th>Product Name</th>
        <th>Product Cost</th>
        <th>Product Description</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->cost}}</td>
            <td>{{$product->description}}</td>
            <td>
                <form action="products/edit/{{$product['id']}}" method="post">
                    @csrf
                    <input type="submit" name="edit" value="edit">
                </form>
            </td>
            <td>
                <form action="products/destroy/{{$product['id']}}" method="post">
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
