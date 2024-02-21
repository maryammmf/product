@extends('layouts.layouts')

@section('head-tag')
    <title>Products</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('products.create') }}" class="btn btn-info text-white mt-3">Create New Product</a>
            </section>
            <section>
                <h3 class="index-header">Products Index Page</h3>
            </section>
        </section>
        <section class="table-responsive my-4">
            <table class="table table-bordered border-primary-subtle table-hover">
                <thead class="text-center">
                    <tr>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>Description</th>
                        <th>operations</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <td>{{$product->name}}</td>
                    <td>{{$product->cost}}</td>
                    <td>{{$product->description}}</td>
                    <td class="text-center">
                        <section class="d-flex">
                            <a href="{{ route('products.show', [$product->id]) }}" class="btn btn-primary btn-sm m-1">Show</a>
                            <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-success btn-sm m-1">Edit</a>

                            <form action="{{ route('products.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button class="btn btn-danger btn-sm m-1" type="submit">Delete</button>
                            </form>

                        </section>
                    </td>
                </tbody>
                @endforeach

            </table>
        </section>
@endsection
