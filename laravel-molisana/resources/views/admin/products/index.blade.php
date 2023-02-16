@extends('layouts.app')

@section('title', 'Tipi di pasta')

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row justify-content-around">
                {{-- @dump(Route::currentRouteName()) --}}

                @if (session('message'))
                    <div class="alert alert-{{ session('alert-type') }}">
                        {{ session('message')  }}
                    </div>
                @endif

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
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning"> Edit </a>
                                <form class="d-inline-block form-deleter" action="{{ route('admin.products.destroy', $product->id) }}" method="POST" data-element-name="{{ $product->title }}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
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

@section('scripts')
    @vite('resources/js/deleteHandler.js')
@endsection