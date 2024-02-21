@extends('layouts.layouts')

@section('head-tag')
    <title>Create New Post</title>
@endsection

@section('content')
    <section class="d-flex align-items-center mt-4">
        <section>
            <a href="{{ route('posts.index') }}" class="btn btn-info text-white mt-3">Back</a>
        </section>
        <section>
            <h3 class="show-header">Create New Post</h3>
        </section>
    </section>

    <section class="border border-primary-subtle pt-3 px-3 mt-5 rounded">

        <form action="{{ route('posts.store') }}" method="POST">

            @csrf

            <section class="mb-3">
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                <span class="text-danger">
                    @error('title')
                        {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="content" class="form-label">Content :</label>
                <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') }}</textarea>
                <span class="text-danger">
                    @error('content')
                        {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="user_id" class="form-label">User :</label>
                <select class="form-control" name="user_id" id="user_id">
                    <option selected disabled value="">Please select your name</option>

                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach

                </select>
                <span class="text-danger">
                    @error('user_id')
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
