@extends('layouts.layouts')

@section('head-tag')
    <title>Users Show Page</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('users.index') }}" class="btn btn-info text-white mt-3">Back</a>
            </section>
            <section>
                <h3 class="show-header">Users Show Page</h3>
            </section>
        </section>
        <section class="border border-primary-subtle px-3 mt-5 rounded">
            <section class="row my-3">
                <section class="col-2 p-3">
                    Name :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $user->name }}
                </section>
            </section>

            <section class="row my-3 ">
                <section class="col-2 p-3">
                    Email :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $user->email }}
                </section>
            </section>

            <section class="row my-3">
                <section class="col-2 p-3">
                    Email verified at :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $user->email_verified_at }}
                </section>
            </section>
        </section>
@endsection
