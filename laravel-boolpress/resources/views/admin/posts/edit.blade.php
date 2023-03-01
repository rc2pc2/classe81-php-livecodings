@extends('layouts.admin')

@section('content')
<div class="container">
    @include('admin.posts.partials.editCreate', [ 'method' => 'PUT', 'routeName' => 'admin.posts.update'])
</div>
@endsection
