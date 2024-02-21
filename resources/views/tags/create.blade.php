@extends('layouts.layouts')

@section('head-tag')
    <title>Create New Tag</title>
@endsection

@section('content')
    <section class="d-flex align-items-center mt-4">
        <section>
            <a href="{{ route('tags.index') }}" class="btn btn-info text-white mt-3">Back</a>
        </section>
        <section>
            <h3 class="show-header">Create New Tag</h3>
        </section>
    </section>

    <section class="border border-primary-subtle pt-3 px-3 mt-5 rounded">

        <form action="{{ route('tags.store') }}" method="POST">

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
                <input class="btn btn-success" type="submit" value="Create">
            </section>


        </form>
    </section>

@endsection
