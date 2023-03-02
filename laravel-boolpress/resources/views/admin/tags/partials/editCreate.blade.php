<form action="{{ route($routeName, $tag) }}" method="POST" class="p-5" enctype="multipart/form-data" >
    @csrf
    @method($method)



    @if($errors->any())
    <div class="error-wrapper">
        <div class="alert alert-danger ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <h5 class="mb-3">
        Tag editor
    </h5>

    <div class="mb-3">
        <label for="tag_name" class="form-label">
            Tag name
        </label>
        <input type="text" class="form-control" id="post_title" placeholder="Insert post's title" name="name" value="{{ old('name', $tag->name) }}">
    </div>


    <div class="mb-3">
        <label for="tag_color" class="form-label">Accent Color</label>
        <input type="color" class="form-control" id="tag_color" name="accent_color" value="{{ old('accent_color', $tag->accent_color) }}">
    </div>


    <div class="mb-3">
        <label for="tag_bg_color" class="form-label">Background Color</label>
        <input type="color" class="form-control" id="tag_bg_color" name="bg_color" value="{{ old('bg_color', $tag->bg_color) }}">
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            {{ $routeName == 'admin.tags.update' ? 'Update tag' : 'Create new tag'  }}
        </button>
    </div>
</form>