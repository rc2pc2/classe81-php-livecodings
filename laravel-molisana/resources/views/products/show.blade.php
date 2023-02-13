@extends('layouts.app')

@section('title', "Pasta - $product->title")

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row justify-content-around">
                @dump(Route::currentRouteName())
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection