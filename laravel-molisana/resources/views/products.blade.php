@extends('layouts.app')

@section('title', 'Tipi di pasta')

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row">
                @dump(Route::currentRouteName())
                @foreach ($pastas as $pasta)
                <div class="col-4 text-dark">
                    <div class="card p-3">
                        <img src="{{ $pasta['src'] }}" alt="" class="img-fluid">
                        <div class="description">
                            <h4>
                                {{ $pasta['titolo'] }}
                            </h4>
                            <h6>
                                {{ $pasta['cottura'] }}
                            </h6>
                            <p>
                                {{ $pasta['tipo'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection