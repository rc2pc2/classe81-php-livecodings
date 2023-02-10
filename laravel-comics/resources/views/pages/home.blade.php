@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
    <div class="container">
        <div class="row">

            @foreach ($comics as $comic)
                <div class="col-4 text-dark">
                    <div class="card p-3">
                        {{-- @dump($comic) --}}
                        <img src="{{ $comic['thumb']  }}" alt="" class="img-fluid">
                        <div class="description">
                            <h4>
                                {{ $comic['series'] }}
                            </h4>
                            <h6>
                                {{ $comic['title'] }}
                            </h6>
                            <p>
                                {{ $comic['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection