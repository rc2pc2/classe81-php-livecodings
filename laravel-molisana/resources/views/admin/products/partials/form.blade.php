{{-- rotta: da store a update, la update vuole un argomento --}}
{{-- method o è POST o è PUT --}}
{{-- dati da inserire: vuoti nella create, popolati nella edit --}}


<form action="{{ route($route, $product->id) }}" method="POST">
    @csrf
    @method($method)
    {{-- @dd($product->id) --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="mb-3">
        <label class="form-label">
            Title
        </label>
        {{-- ? se esiste un vecchio titolo nella sessione => scrivi lui, altrimenti scrivi il nomer del prodotto che hai inserito all'inizio --}}
        <input type="text" class="form-control" name="title" value="{{ old('title', $product->title) }}"  >
    </div>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <label class="form-label me-2">
            Type
        </label>
        <input type="text" class="form-control me-2" name="type" value="{{ old('type', $product->type) }}"  >
        <label class="form-label">
            Time
        </label>

        <input type="text" class="form-control me-2" name="cooking_time" value="{{  old('cooking_time', $product->cooking_time) }}" >
        <label class="form-label">
            Weight
        </label>
        <input type="text" class="form-control me-2" name="weight" value="{{ old('weight') ?? $product->weight }}" >
    </div>

    <div class="mb-3">
        <label class="form-label">
            Description
        </label>
        <textarea name="description" class="form-control" id=""  >{{ old('description',  $product->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">
            Specific Image
        </label>
        <input type="text" class="form-control" name="image_specific"
        value="{{ old('image_specific',  $product->image_specific ) }}" >
    </div>

    <div class="mb-3">
        <label class="form-label">
            Package image
        </label>
        <input type="text" class="form-control" name="image_package" value="{{  old('image_package',  $product->image_package) }}" >
    </div>

    <div class="mb-3">
        <label class="form-label">
            Raw Image
        </label>
        <input type="text" class="form-control" name="image_raw" value="{{ old('image_raw', $product->image_raw) }}" >
    </div>

    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</form>