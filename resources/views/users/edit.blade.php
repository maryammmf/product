@extends('layouts.layouts')

@section('head-tag')
    <title>User Edit Page</title>
@endsection

@section('content')
    <section class="d-flex align-items-center mt-4">
        <section>
            <a href="{{ route('users.index') }}" class="btn btn-info text-white mt-3">Back</a>
        </section>
        <section>
            <h3 class="show-header">Edit User</h3>
        </section>
    </section>

    <section class="border border-primary-subtle pt-3 px-3 mt-5 rounded">

        <form action="{{ route('users.update') }}" method="POST">

            @csrf

            @method('PUT')

            <input type="hidden" name="id" value="{{ $user->id }}">

            <section class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                <span class="text-danger">
                    @error('name')
                    {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                <span class="text-danger">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" name="password" id="password">
                <span class="text-danger">
                    @error('password')
                    {{ $message }}
                    @enderror
                </span>
            </section>

            <section class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation :</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                <span class="text-danger">
                    @error('password_confirmation')
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
