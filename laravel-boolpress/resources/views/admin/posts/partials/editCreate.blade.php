<form action="{{ route($routeName, $post) }}" method="POST" class="p-5" enctype="multipart/form-data" >
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
        Author: <span class="fw-semibold">{{ $post->user->name ?? Auth::user()->name }} </span>
    </h5>



    <div class="mb-3">
        <label for="post_category" class="form-label">
            Post Title
        </label>

        <select  class="form-control" id="post_category" name="category_id" >
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    style="color: {{ $category->color }}"
                    {{ old('category_id', $post->category_id) ==  $category->id ? 'selected' : '' }}>

                    <span >
                        {{ $category->name }}
                    </span>
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3 tags d-flex align-items-center justify-content-between">


        @foreach ($tags as $tag)
                <div class="single-tag d-flex align-items-center">
                    <input type="checkbox" class="form-check-input" name="tags[]" value="{{ $tag->id }}"

                    @if ($errors->any())
                        @checked(in_array($tag->id, old('tags',[])))
                    @else
                        @checked($post->tags->contains($tag->id))
                    @endif
                    >

                    <label class="form-check-label ms-2">{{ $tag->name }}</label>
                </div>
        @endforeach
    </div>

    <div class="mb-3">

        <label for="post_title" class="form-label">
            Post Title
        </label>
        <input type="text" class="form-control" id="post_title" placeholder="Insert post's title" name="title" value="{{ old('title', $post->title) }}">
    </div>

    <div class="mb-3">
        <label for="post_date" class="form-label">Post date</label>
        <input type="datetime" class="form-control" id="post_date" name="post_date" value="{{ old('post_date', $post->post_date) }}">
    </div>


    <div class="mb-3">
        <label for="post_content" class="form-label">Post content</label>
        <textarea class="form-control" id="post_content" rows="10" name="content">{{ old('content', $post->content) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="post_content" class="form-label">Post image</label>
        <input type="file" class="form-control" id="post_image" name="image" value="{{ old('image', $post->image) }}">
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            {{ $routeName == 'admin.posts.update' ? 'Update post' : 'Create new post'  }}
        </button>
    </div>
</form>