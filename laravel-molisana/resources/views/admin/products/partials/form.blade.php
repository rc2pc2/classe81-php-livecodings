{{-- rotta: da store a update, la update vuole un argomento --}}
{{-- method o è POST o è PUT --}}
{{-- dati da inserire: vuoti nella create, popolati nella edit --}}


<form action="{{ route($route, $product->id ?? '') }}" method="POST">
    @csrf
    @method('$method')

    <div class="mb-3">
        <label class="form-label">
            Title
        </label>
        <input type="text" class="form-control" name="title" value="{{ $product->title ?? '' }}"  >
    </div>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <label class="form-label me-2">
            Type
        </label>
        <input type="text" class="form-control me-2" name="type" value="{{ $product->type ?? '' }}"  >

        <label class="form-label">
            Time
        </label>
        <input type="text" class="form-control me-2" name="cooking_time" value="{{ $product->cooking_time  ?? '' }}" >

        <label class="form-label">
            Weight
        </label>
        <input type="text" class="form-control me-2" name="weight" value="{{ $product->weight ?? ''}}" >
    </div>

    <div class="mb-3">
        <label class="form-label">
            Description
        </label>
        <textarea name="description" class="form-control" id=""  >{{ $product->description ?? '' }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">
            Specific Image
        </label>
        <input type="text" class="form-control" name="image_specific"
        value="{{ $product->image_specific ?? '' }}" >
    </div>

    <div class="mb-3">
        <label class="form-label">
            Package image
        </label>
        <input type="text" class="form-control" name="image_package" value="{{ $product->image_package ?? '' }}" >
    </div>

    <div class="mb-3">
        <label class="form-label">
            Raw Image
        </label>
        <input type="text" class="form-control" name="image_raw" value="{{ $product->image_raw ?? '' }}" >
    </div>

    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</form>