@extends('layouts.admin')

@section('content')
<div class="container">
    @include('admin.categories.partials.editCreate', [ 'method' => 'POST', 'routeName' => 'admin.categories.store'])
</div>
@endsection
