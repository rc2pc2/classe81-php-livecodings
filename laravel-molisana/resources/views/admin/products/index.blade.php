@extends('layouts.app')

@section('title', 'Tipi di pasta')

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row justify-content-around">
                @dump(Route::currentRouteName())

                <div class="col-12 d-flex ">
                    <a class="ms-auto me-5 btn btn-sm btn-primary" href="{{ route('admin.products.create') }}">
                        Create new product
                    </a>
                </div>


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Cooking Time</th>
                            <th> ... </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <th scope="row"> {{ $product->id }}</th>
                            <td> {{ $product->title }} </td>
                            <td> {{ $product->type }} </td>
                            <td> {{ $product->cooking_time }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary"
                                href="{{ route('admin.products.show', $product->id) }}">
                                    Show
                                </a>
                                <button class="btn btn-sm btn-warning"> Edit </button>
                                <button class="btn btn-sm btn-danger"> Delete </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th scope="row" colspan="6"> There are no products to be shown</th>
                        </tr>
                        @endforelse
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection