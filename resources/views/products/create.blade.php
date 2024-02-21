@extends('layouts.layouts')

@section('head-tag')
    <title>Create New Product</title>
@endsection

@section('content')
    <section class="d-flex align-items-center mt-4">
        <section>
            <a href="{{ route('products.index') }}" class="btn btn-info text-white mt-3">Back</a>
        </section>
        <section>
            <h3 class="show-header">Create New Product</h3>
        </section>
    </section>

    <section class="border border-primary-subtle pt-3 px-3 mt-5 rounded">

        <form action="{{ route('products.store') }}" method="POST">

            @csrf

            <section class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="cost" class="form-label">Cost :</label>
                <input type="text" class="form-control" name="cost" id="cost" value="{{ old('cost') }}">
                <span class="text-danger">
                    @error('cost')
                        {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                <span class="text-danger">
                    @error('description')
                    {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <input class="btn btn-success" type="submit" value="Create">
            </section>


        </form>
    </section>

@endsection
