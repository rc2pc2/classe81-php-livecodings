@extends('layouts.admin')

@section('head')
    @vite(['resources/js/deleteHandler.js'])
@endsection

@section('content')
<div class="container  mt-5">

    {{-- se ho un messaggio
        mostralo --}}
    @if (session('message'))
        <div class="alert alert-{{ session('message_class') }} mb-3">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-striped table-borderless table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Post date</th>
                <th scope="col">Tags</th>
                <th scope="col">Category</th>
                <th scope="col">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-primary">
                        Create new post
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->post_date }}</td>
                <td>
                    @forelse ($post->tags as $tag)
                        {{ $tag->name }},
                    @empty
                        No tags
                    @endforelse
                </td>
                <td>{{ $post->category->name ?? 'No category' }}</td>

                <td>
                    <a href="{{ route('admin.posts.show', $post->slug) }}" class="btn btn-sm btn-primary">
                        Show
                    </a>

                    <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-sm btn-success">
                        Edit
                    </a>

                    <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST" class="d-inline-block form-deleter" data-element-name='"{{ $post->title }}"'>
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>

                </td>
                {{-- per ogni post --}}
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>
@endsection
