@extends('layouts.app')

@section('title', "Editing $product->title")

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row justify-content-around">
                @dump(Route::currentRouteName())
                {{-- @dump($product) --}}
                <div class="col-12">
                    @include('admin.products.partials.form',
                    ['route'=> 'admin.products.update' , 'method' => 'PUT', "product" => $product])
                </div>
            </div>
        </div>
    </div>
@endsection