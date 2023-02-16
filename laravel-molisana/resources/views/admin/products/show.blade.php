@extends('layouts.app')

@section('title', "Pasta - $product->title")

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row justify-content-around">

                @if (session('message'))
                    <div class="alert alert-{{ session('alert-type') }}">
                        {{ session('message')  }}
                    </div>
                @endif

                <div class="col-12">
                    <div class="card p-5 text-center">
                        <div class="card-title">
                            <h1>
                                {{ $product->title }}
                            </h1>
                        </div>
                        <div class="card-img">
                            <img src="{{ $product->image_package }}" alt="{{ $product->title }}" class="img-fluid">
                        </div>
                        <div class="card-subtitle">
                            <h3>
                                Pasta {{ $product->type }} : che cuoce in {{ $product->cooking_time }}uti
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="p-4">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-lg btn-warning"> Edit </a>
                            <form class="d-inline-block form-deleter" action="{{ route('admin.products.destroy', $product->id) }}" method="POST" data-element-name="{{ $product->title }}">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-lg btn-danger">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/deleteHandler.js')
@endsection