@extends('layouts.layouts')

@section('head-tag')
    <title>Products Show Page</title>
@endsection

@section('content')
        <section class="d-flex align-items-center mt-4">
            <section>
                <a href="{{ route('products.index') }}" class="btn btn-info text-white mt-3">Back</a>
            </section>
            <section>
                <h3 class="show-header">Products Show Page</h3>
            </section>
        </section>
        <section class="border border-primary-subtle px-3 mt-5 rounded">
            <section class="row my-3">
                <section class="col-2 p-3">
                    Name :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $product->name }}
                </section>
            </section>

            <section class="row my-3 ">
                <section class="col-2 p-3">
                    Cost :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $product->cost }}
                </section>
            </section>

            <section class="row my-3">
                <section class="col-2 p-3">
                    Description :
                </section>
                <section class="col-10 border rounded p-3 bg-primary-subtle">
                    {{ $product->description }}
                </section>
            </section>
        </section>
@endsection
