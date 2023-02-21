@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            {{ $post->author }}
        </div>
        <div class="card-body p-3 m-3">
            <h2 class="card-title fw-bold p-3">
                {{ $post->title }}
            </h2>
            <p class="card-text mb-4">
                {{ $post->content }}
            </p>
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success">
                Edit
            </a>

            <a href="#" class="btn btn-danger">
                Delete this posts
                {{-- TODO: fare un form --}}
            </a>
        </div>
        <div class="card-footer text-muted">
            {{ $post->post_date }}
        </div>
      </div>
</div>
@endsection
