@extends('layouts.layouts')

@section('head-tag')
    <title>Tags Show Page</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('tags.index') }}" class="btn btn-info text-white mt-3">Back</a>
            </section>
            <section>
                <h3 class="show-header">Tags Show Page</h3>
            </section>
        </section>
        <section class="border border-primary-subtle px-3 mt-5 rounded">
            <section class="row my-3">
                <section class="col-2 p-3">
                    Name :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $tag->name }}
                </section>
            </section>
        </section>
@endsection
