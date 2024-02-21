@extends('layouts.layouts')

@section('head-tag')
    <title>Users</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('users.create') }}" class="btn btn-info text-white mt-3">Create New User</a>
            </section>
            <section>
                <h3 class="index-header">Users Index Page</h3>
            </section>
        </section>
        <section class="table-responsive my-4">
            <table class="table table-bordered border-primary-subtle table-hover">
                <thead class="text-center">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Email verified at</th>
                        <th>operations</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td class="text-center">
                        <section class="d-flex">
                            <a href="{{ route('users.show', [$user->id]) }}" class="btn btn-primary btn-sm m-1">Show</a>
                            <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-success btn-sm m-1">Edit</a>

                            <form action="{{ route('users.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <button class="btn btn-danger btn-sm m-1" type="submit">Delete</button>
                            </form>

                        </section>
                    </td>
                </tbody>
                @endforeach

            </table>
        </section>
@endsection
