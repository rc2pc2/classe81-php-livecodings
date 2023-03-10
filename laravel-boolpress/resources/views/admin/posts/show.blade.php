@extends('layouts.admin')

@section('head')
    @vite(['resources/js/deleteHandler.js'])
@endsection


@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header fw-bold">
            {{ $post->user->name }} --- <span style="color: {{ $post->category->color }}">{{ $post->category->name }}</span>
        </div>
        <div class="card-body p-3 m-3">


            <h2 class="card-title fw-bold p-3 mb-3">
                {{ $post->title }}
            </h2>

            <div class="tags mb-5">
                @foreach ($post->tags as $tag)
                   <span class="p-2 badge rounded-pill"
                   style="background-color: {{ $tag->bg_color }}; color: {{ $tag->accent_color }}"> #{{ $tag->name }}</span>
                @endforeach
            </div>


            <div class="card-image mb-5">
                @if ( $post->isImageAUrl())
                    <img src="{{ $post->image }}"
                @else
                    <img src="{{ asset('storage/' . $post->image ) }}"
                @endif
                    alt="{{ $post->title }} image" class="img-fluid">
            </div>

            <p class="card-text mb-4">
                {{ $post->content }}
            </p>

            <div class="buttons d-flex">
                @if (isset($previousPost))
                    <a href="{{ route('admin.posts.show', $previousPost->slug) }}" class="btn btn-outline-primary me-auto">
                @else
                    <a href="" class="btn btn-outline-primary disabled me-auto" >
                @endif
                    Previous
                </a>


                <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-success">
                    Edit
                </a>


                <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST" class="d-inline-block form-deleter" data-element-name='"{{ $post->title }}"'>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>

                @if (isset($nextPost))
                    <a href="{{ route('admin.posts.show', $nextPost->slug) }}" class="btn btn-outline-primary ms-auto">
                @else
                    <a href="" class="btn btn-outline-primary ms-auto disabled">
                @endif
                        Next
                    </a>

            </div>



        </div>
        <div class="card-footer text-muted">
            {{ $post->post_date }} - {{ $post->slug }}
        </div>
    </div>
</div>
@endsection
