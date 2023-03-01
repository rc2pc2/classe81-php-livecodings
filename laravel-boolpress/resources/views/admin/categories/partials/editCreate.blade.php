<form action="{{ route($routeName, $category) }}" method="POST" class="p-5" enctype="multipart/form-data" >
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
        Category editor
    </h5>

    <div class="mb-3">
        <label for="category_name" class="form-label">
            Category name
        </label>
        <input type="text" class="form-control" id="post_title" placeholder="Insert post's title" name="name" value="{{ old('name', $category->name) }}">
    </div>

    <div class="mb-3">
        <label for="category_color" class="form-label">Color</label>
        <input type="color" class="form-control" id="category_color" name="color" value="{{ old('color', $category->color) }}">
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            {{ $routeName == 'admin.categories.update' ? 'Update category' : 'Create new category'  }}
        </button>
    </div>
</form>