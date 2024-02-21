@extends('layouts.layouts')

@section('head-tag')
    <title>Post Edit Page</title>
@endsection

@section('content')
    <section class="d-flex align-items-center mt-4">
        <section>
            <a href="{{ route('posts.index') }}" class="btn btn-info text-white mt-3">Back</a>
        </section>
        <section>
            <h3 class="show-header">Edit Post</h3>
        </section>
    </section>

    <section class="border border-primary-subtle pt-3 px-3 mt-5 rounded">

        <form action="{{ route('posts.update') }}" method="POST">

            @csrf

            @method('PUT')

            <input type="hidden" name="id" value="{{ $post->id }}">

            <section class="mb-3">
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                <span class="text-danger">
                    @error('title')
                    {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="content" class="form-label">Content :</label>
                <textarea class="form-control" name="content" id="content" rows="3">{{ $post->content }}</textarea>
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
                        <option {{ $user->id === $post->user_id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach

                </select>
                <span class="text-danger">
                    @error('user_id')
                    {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <input class="btn btn-success" type="submit" value="Edit">
            </section>


        </form>
    </section>
@endsection
