@extends('layouts.app')

@section('title', "Create new product")

@section('main-content')
    <div class="products">
        <div class="container">
            <div class="row justify-content-around">
                @dump(str_starts_with(Route::currentRouteName(), 'admin.products'))
                <div class="col-12">
                    <form action="{{ route('admin.products.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">
                                Title
                            </label>
                            <input type="text" class="form-control" name="title"  >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Type
                            </label>
                            <input type="text" class="form-control" name="type"  >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Cooking Time
                            </label>
                            <input type="text" class="form-control" name="cooking_time"  >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Weight
                            </label>
                            <input type="text" class="form-control" name="weight"  >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Description
                            </label>
                            <textarea name="description" class="form-control" id="" ></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Specific Image
                            </label>
                            <input type="text" class="form-control" name="image_specific"  >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Package image
                            </label>
                            <input type="text" class="form-control" name="image_package"  >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Raw Image
                            </label>
                            <input type="text" class="form-control" name="image_raw"  >
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection