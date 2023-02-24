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
        Author: <span class="fw-semibold">{{ Auth::user()->name }} </span>
    </h5>


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
            Create new post
        </button>
    </div>
</form>