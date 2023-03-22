<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    protected $validationRules = [
        'title' => ['required', 'unique:posts' ],
        'post_date' => 'required',
        'content' => 'required',
        'image' => 'required|image|max:300',
        'category_id' => 'required|exists:categories,id',
        'tags' => 'array|exists:tags,id'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::user())
        if (Auth::user()->roles()->pluck('id')->contains(1)) {
            $posts = Post::orderBy('post_date', 'DESC')->paginate(10);
        } else {
            $posts = Post::where('user_id', Auth::user()->id)->orderBy('post_date', 'DESC')->paginate(10);
        }

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', ["post" => new Post(), 'categories' => Category::all(), 'tags' => Tag::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate($this->validationRules);
        // dd($data);
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($data['title']);
        $data['image'] =  Storage::put('imgs/', $data['image']); // in imgs/wmdjkoqwndioqwndqw.jpg

        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();
        $newPost->tags()->sync($data['tags']);

        return redirect()->route('admin.posts.index')->with('message', "Post $newPost->title has been created succesfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post the current post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $previousPost = Post::where('post_date', '>', $post->post_date)->orderBy('post_date')->first();

        $nextPost = Post::where('post_date', '<', $post->post_date)->orderBy('post_date','DESC')->first();

        return view('admin.posts.show', compact('post', 'nextPost', 'previousPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [ 'post' => $post , 'categories' => Category::all(), 'tags' => Tag::all() ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $data = $request->validate([
            'title' => ['required', Rule::unique('posts')->ignore($post->id) ],
            'post_date' => 'required',
            'content' => 'required',
            'image' => 'image|required|max:300',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array|exists:tags,id'
        ]);

        if ($request->hasFile('image')){

            if (!$post->isImageAUrl()){
                Storage::delete($post->image);
            }

            $data['image'] =  Storage::put('imgs/', $data['image']);
        }

        $post->update($data);
        $post->tags()->sync($data['tags']);

        return redirect()->route('admin.posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) // § se arriva uno slug => io prendo automaticamente il modello, lo popolo prendendo dal db la risorsa con quello slug che lo definisce e lo inserisco dentro a questa funzione
    {
        if (!$post->isImageAUrl()) {
            Storage::delete($post->image);
        }

        $post->tags()->sync([]);
        $post->delete();

        return redirect()->route('admin.posts.index')->with('message', "The post \"$post->title\" has been removed correctly")->with('message_class', 'danger');
    }


    /**
     * Clears the linked category of this post.
     *
     * @param Post $post
     * @return void
     */
    public function clearCategory(Post $post){
        $category = $post->category;
        $post->category_id = null;
        $post->update();
        return redirect()->route('admin.categories.show', compact('category'));
    }


    /**
     * Clears every tag lìnked with this post.
     *
     * @param Post $post
     * @return void
     */
    public function clearTags(Post $post){
        $post->sync([]);
        return redirect()->route('admin.tags.index');
    }
}
