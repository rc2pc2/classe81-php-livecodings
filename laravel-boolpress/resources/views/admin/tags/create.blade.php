@extends('layouts.admin')

@section('content')
<div class="container">
    @include('admin.tags.partials.editCreate', [ 'method' => 'POST', 'routeName' => 'admin.tags.store'])
</div>
@endsection
