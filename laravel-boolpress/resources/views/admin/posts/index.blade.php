@extends('layouts.admin')

@section('content')
<div class="container">
    <table class="table table-striped table-borderless table-hover mt-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Post date</th>
                <th scope="col">
                    <a href="" class="btn btn-sm btn-primary">
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
                <td>{{ $post->author }}</td>
                <td>{{ $post->post_date }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-primary">
                        Show
                    </a>

                    <a href="" class="btn btn-sm btn-success">
                        Edit
                    </a>

                    <a href="" class="btn btn-sm btn-danger">
                        Delete
                        {{-- TODO FARE UN FORM --}}
                    </a>
                </td>
                {{-- per ogni post --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
