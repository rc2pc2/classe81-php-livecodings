@extends('layouts.admin')

@section('content')
<div class="container">
    @include('admin.categories.partials.editCreate', [ 'method' => 'PUT', 'routeName' => 'admin.categories.update'])
</div>
@endsection
