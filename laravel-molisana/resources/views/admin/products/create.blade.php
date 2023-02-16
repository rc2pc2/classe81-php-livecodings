@extends('layouts.app')

@section('title', "Create new product")

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row justify-content-around">
                @dump(Route::currentRouteName())
                <div class="col-12">
                    @include('admin.products.partials.form',
                    ['route'=> 'admin.products.store',
                    'method' => 'POST',
                    "product" => $product ])
                </div>
            </div>
        </div>
    </div>
@endsection