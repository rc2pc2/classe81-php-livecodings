@extends('layouts.app')

@section('main-content')
    <h1>Homepage</h1>
    <a href="{{ route('profile') }}">
        <h3>
            {{ $title }}
        </h3>
    </a>
    <a href="{{ route('profile') }}">
        <h3>
            {{ $title }}
        </h3>
    </a>
    <a href="/">
        <h3>
            {{ $title }}
        </h3>
    </a>
    <p>This is my body content.</p>
@endsection






