@extends('layouts.layouts')

@section('head-tag')
    <title>Posts Show Page</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('posts.index') }}" class="btn btn-info text-white mt-3">Back</a>
            </section>
            <section>
                <h3 class="show-header">Posts Show Page</h3>
            </section>
        </section>
        <section class="border border-primary-subtle px-3 mt-5 rounded">
            <section class="row my-3">
                <section class="col-2 p-3">
                    Title :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $post->title }}
                </section>
            </section>

            <section class="row my-3 ">
                <section class="col-2 p-3">
                    Content :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $post->content }}
                </section>
            </section>

            <section class="row my-3">
                <section class="col-2 p-3">
                    User :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $post->user_id }}
                </section>
            </section>
        </section>
@endsection
