@extends('layouts.admin')

@section('content')
<div class="container">
    @include('admin.tags.partials.editCreate', [ 'method' => 'PUT', 'routeName' => 'admin.tags.update'])
</div>
@endsection
