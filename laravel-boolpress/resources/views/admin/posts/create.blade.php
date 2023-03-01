@extends('layouts.admin')

@section('content')
<div class="container">
    @include('admin.posts.partials.editCreate', [ 'method' => 'POST', 'routeName' => 'admin.posts.store'])
</div>
@endsection
