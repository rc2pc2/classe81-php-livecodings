@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{ route('admin.posts.store') }}" method="POST" class="p-5">
        @csrf
        @method('POST')

        <h5 class="mb-3">
            Create a new post from <span class="fw-semibold">{{ Auth::user()->name }} </span>
        </h5>


        <div class="mb-3">
            <label for="post_title" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="post_title" placeholder="Insert post's title" name="title">
        </div>

        <div class="mb-3">
            <label for="post_date" class="form-label">Post date</label>
            <input type="date" class="form-control" id="post_date" name="post_date">
        </div>


        <div class="mb-3">
            <label for="post_content" class="form-label">Post content</label>
            <textarea class="form-control" id="post_content" rows="10" name="content"></textarea>
        </div>


        <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                Create new post
            </button>
        </div>
    </form>

</div>
@endsection
