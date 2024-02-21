@extends('layouts.layouts')

@section('head-tag')
    <title>Posts</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('posts.create') }}" class="btn btn-info text-white mt-3">Create New Post</a>
            </section>
            <section>
                <h3 class="index-header">Posts Index Page</h3>
            </section>
        </section>
        <section class="table-responsive my-4">
            <table class="table table-bordered border-primary-subtle table-hover">
                <thead class="text-center">
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>User</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->user_id}}</td>
                    <td class="text-center">
                        <section class="d-flex">
                            <a href="{{ route('posts.show', [$post->id]) }}" class="btn btn-primary btn-sm m-1">Show</a>
                            <a href="{{ route('posts.edit', [$post->id]) }}" class="btn btn-success btn-sm m-1">Edit</a>

                            <form action="{{ route('posts.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $post->id }}">
                                <button class="btn btn-danger btn-sm m-1" type="submit">Delete</button>
                            </form>

                        </section>
                    </td>
                </tbody>
                @endforeach

            </table>
        </section>
@endsection
