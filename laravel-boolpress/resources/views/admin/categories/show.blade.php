
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="m-3 p-2 fw-bold text-center">
        Posts in {{  $category->name }} category
    </h2>

    @foreach ($category->posts as $post)
    <div class="card text-center">
        <div class="card-header">
            {{ $post->user->name }}
        </div>
        <div class="card-body p-3 m-3">
            <h2 class="card-title fw-bold p-3">
                {{ $post->title }}
            </h2>
            <p class="card-text mb-4">
                {{ $post->content }}
            </p>

            <form action="{{ route('admin.posts.clearCategory', $post) }}" method="POST" class="d-inline-block form-deleter" data-element-name='"{{ $post->title }}"'>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-sm btn-danger">
                    Remove post from {{ $category->name }} category
                </button>
            </form>
        </div>


        <div class="card-footer text-muted">
            {{ $post->post_date }}
        </div>



    </div>
    @endforeach

</div>
@endsection
