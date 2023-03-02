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
                <th scope="col">Name</th>
                <th scope="col">Accent Color</th>
                <th scope="col">BG Color</th>
                <th scope="col"># of posts</th>
                <th scope="col">
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-sm btn-primary">
                        Create new post
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td style="background-color: {{ $tag->accent_color }}">{{ $tag->accent_color }}</td>
                <td style="background-color: {{ $tag->bg_color }}">{{ $tag->bg_color }}</td>
                <td>{{ count($tag->posts) }}</td>
                <td>
                    <a href="{{ route('admin.tags.show', $tag->slug) }}" class="btn btn-sm btn-primary">
                        Show
                    </a>

                    <a href="{{ route('admin.tags.edit', $tag->slug) }}" class="btn btn-sm btn-success">
                        Edit
                    </a>

                    <form action="{{ route('admin.tags.destroy', $tag->slug) }}" method="POST" class="d-inline-block form-deleter" data-element-name='"{{ $tag->name }}"'>
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

    {{ $tags->links() }}
</div>
@endsection
