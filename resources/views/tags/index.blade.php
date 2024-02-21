@extends('layouts.layouts')

@section('head-tag')
    <title>Tags</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('tags.create') }}" class="btn btn-info text-white mt-3">Create New Tag</a>
            </section>
            <section>
                <h3 class="index-header">Tags Index Page</h3>
            </section>
        </section>
        <section class="table-responsive my-4">
            <table class="table table-bordered border-primary-subtle table-hover">
                <thead class="text-center">
                    <tr>
                        <th>Name</th>
                        <th>operations</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <td>{{$tag->name}}</td>
                    <td class="text-center">
                        <section class="d-flex">
                            <a href="{{ route('tags.show', [$tag->id]) }}" class="btn btn-primary btn-sm m-1">Show</a>
                            <a href="{{ route('tags.edit', [$tag->id]) }}" class="btn btn-success btn-sm m-1">Edit</a>

                            <form action="{{ route('tags.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $tag->id }}">
                                <button class="btn btn-danger btn-sm m-1" type="submit">Delete</button>
                            </form>

                        </section>
                    </td>
                </tbody>
                @endforeach

            </table>
        </section>
@endsection
