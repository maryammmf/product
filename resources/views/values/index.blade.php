@extends('layouts.layouts')

@section('head-tag')
    <title>{{ $cat }}</title>
@endsection

@section('content')
    <h2 class="my-4">{{ $cat }} page</h2>
    <section>
        <ul>
            <li>Title => {{ $title }}</li>
            <li>id => {{ $id }}</li>
            <li>Cat => {{ $cat }}</li>
        </ul>
    </section>
@endsection
