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
                <th scope="col">Color</th>
                <th scope="col"># of posts</th>
                <th scope="col">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary">
                        Create new post
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td style="background-color: {{ $category->color }}">{{ $category->color }}</td>
                <td>{{ count($category->posts) }}</td>
                <td>
                    <a href="{{ route('admin.categories.show', $category->slug) }}" class="btn btn-sm btn-primary">
                        Show
                    </a>

                    <a href="{{ route('admin.categories.edit', $category->slug) }}" class="btn btn-sm btn-success">
                        Edit
                    </a>

                    <form action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST" class="d-inline-block form-deleter" data-element-name='"{{ $category->name }}"'>
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

    {{ $categories->links() }}
</div>
@endsection
